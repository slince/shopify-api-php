<?php

use Doctrine\Common\Annotations\AnnotationReader;
use JMS\Serializer\Builder\DefaultDriverFactory;
use JMS\Serializer\Metadata\Driver\DocBlockDriverFactory;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Type\Parser;
use JMS\Serializer\Metadata\ClassMetadata;
use Metadata\MetadataFactory;

include_once __DIR__ . '/vendor/autoload.php';

$tools = new FixturesGenerator([
    'tests_dir' => __DIR__ . '/tests',
    'model_dir' => __DIR__ . '/src/Model',
    'service_dir' => __DIR__ . '/src/Service',
    'serializer_dir' => __DIR__ . '/config/serializer'
]);

$tools->generateAvailableManager();

final class FixturesGenerator
{
    protected $metadataFactory;

    protected $options = [
        'service_dir' =>  '',
        'model_dir' => '',
        'serializer_dir' => '',
        'tests_dir' => '',
    ];

    public function __construct($options)
    {
        $this->options = array_merge($this->options, $options);
    }

    public function getClassesFile($path)
    {
        return new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path), \RecursiveIteratorIterator::SELF_FIRST);
    }

    public function generateModelTests()
    {
        foreach ($this->getClassesFile(__DIR__ . '/src/Model') as $file) {
            if ($file->isDir()) {
                continue;
            }
            $targetPath = strstr($file->getPathname(), 'src');
            $baseClass = str_replace('.php', '', basename($targetPath));
            $filename = str_replace('.php', 'Test.php', $targetPath);
            $filename = ltrim($filename, 'src/');
//            print_r($filename);
            $namespace = dirname($filename);
            $class = str_replace('Test.php','', $filename);
            $content = <<<EOT
<?php

namespace Slince\Shopify\Tests\\{$namespace};

use Slince\Shopify\\{$class};
use Slince\Shopify\Tests\Model\ModelTestCase;

class {$baseClass}Test extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return {$baseClass}::class;
    }
}
EOT;
            @mkdir(dirname(__DIR__ . '/tests' . $filename), 0777, true);
            file_put_contents(__DIR__ . '/' . $filename, $content);
        }
    }

    public function generateServicesTests()
    {
        foreach ($this->getClassesFile(__DIR__ . '/src/Service') as $file) {
            if ($file->isDir()) {
                continue;
            }
            $targetPath = strstr($file->getPathname(), 'src');
            $baseClass = str_replace('.php', '', basename($targetPath));
            $filename = str_replace('.php', 'Test.php', $targetPath);
            $filename = ltrim($filename, 'src/');
//            print_r($filename);
            $namespace = dirname($filename);
            $class = str_replace('Test.php','', $filename);
            $fullClass = "Slince\\Shopify\\{$class}";

            if (
                is_subclass_of($fullClass, Slince\Shopify\Service\Common\NestCrudManager::class)
            ) {
                $extendClass = "NestCurdManagerTestCase";
            } else {
                $extendClass = "GeneralCurdManagerTestCase";
            }
            $fullpathname = __DIR__ . '/tests/' . $filename;
//            var_dump($fullpathname, strpos($fullpathname, 'Interface') !== false);
            if (
                strpos($fullpathname, 'Interface') !== false
                || (new \ReflectionClass($fullClass))->isAbstract()
                || strpos($fullpathname, 'Manager') === false
            ) {
                @unlink($fullpathname);
                continue;
            }
            $content = <<<EOT
<?php

namespace Slince\Shopify\Tests\\{$namespace};

use Slince\Shopify\Tests\Service\Common\\{$extendClass};

class {$baseClass}Test extends {$extendClass}
{
}
EOT;
            @mkdir(dirname($fullpathname), 0777, true);
            file_put_contents($fullpathname, $content);
        }
    }

    public function generateClientFakeMethods()
    {
        $msg = '';
        foreach ($this->getClassesFile(__DIR__ . '/src/Service') as $file) {
            if ($file->isDir()) {
                continue;
            }
            $targetPath = strstr($file->getPathname(), 'src');
            $baseClass = str_replace('.php', '', basename($targetPath));
            $class = ltrim(str_replace('.php','', $targetPath), 'src/');

            $fullClass = "Slince\\Shopify\\{$class}";

            $ref= new \ReflectionClass($fullClass);
            if ($ref->isInterface() || false !== strpos($fullClass, 'Common')) {
                continue;
            }
            $id = $fullClass::getServiceName();
            $upperId = Slince\Shopify\Inflector::singularize(Slince\Shopify\Inflector::classify($id));

            $interfaces = $ref->getInterfaces();
            $interfaceClass = strstr(end($interfaces)->getName(), 'Service');
            $msg .= "* @method {$interfaceClass} get{$upperId}Manager" . PHP_EOL;
        }
        file_put_contents(__DIR__ . '/magic_methods.txt', $msg);
    }

    public function generateAvailableManager()
    {
        $metadataFactory = $this->getClassMetadata();
        $str = "";
        foreach ($this->globalServiceClass(true) as $class) {
            $filepath = str_replace("\\", "/", "src/" . strstr($class, 'Service')) . ".php";
            $name = str_replace("ManagerInterface", "", strstr($class, 'Service'));
            $name = str_replace("Service\\", "", $name);
            echo "- [{$name}]({$filepath})", PHP_EOL;
        }
    }

    public function generateModelMapping()
    {
        $metadataFactory = $this->getClassMetadata();
        foreach ($this->globalModelClass() as $class) {
            $metadata = $metadataFactory->getMetadataForClass($class);
            $this->generateMetadata($metadata);
        }
    }

    protected function generateMetadata(ClassMetadata $classMetadata)
    {
        $properties = [];
        foreach ($classMetadata->propertyMetadata as $attr => $propertyMetadata) {
            if ($propertyMetadata->type['name'] === 'DateTime') {
//                var_dump($propertyMetadata);exit;
            }
            $type = $propertyMetadata->type['name'];
            switch ($propertyMetadata->type['name']) {
                case 'DateTime':
                    $type = "DateTime<'{$propertyMetadata->type['params'][0]}'>";
                    break;
                case 'DateTimeInterface':
                    $type = "DateTime<'" . \DateTime::ISO8601 . "'>";
                    break;
                case 'array':
                    if (!empty($propertyMetadata->type['params'][0])) {
//                        var_dump($propertyMetadata->type);exit;
                        if (is_scalar($propertyMetadata->type['params'][0])) {
                            $type .= "<{$propertyMetadata->type['params'][0]}>";
                        } else {
                            $type .= "<{$propertyMetadata->type['params'][0]['name']}>";
                        }
                    }
                    break;
            }
            $properties[] = <<<EOT
        {$attr}:
            type: {$type}
EOT;
;
        }
        $properties = implode("\r\n", $properties);
        $yaml = <<<EOT
{$classMetadata->name}:
    properties:
{$properties}
EOT;
        $file = str_replace('\\', '.', strstr($classMetadata->name, 'Model')) . '.yml';
        $file = str_replace('Model.', '', $file);
        file_put_contents($this->options['serializer_dir'] . '/' . $file, $yaml);
    }

    protected function globalServiceClass($interface = false)
    {
        foreach ($this->getClassesFile($this->options['service_dir']) as $file) {
            if ($file->isDir()) {
                continue;
            }
            $class = strstr($file->getPathname(), 'Service');
            $class = str_replace('.php', '', $class);
            $fullClass = "Slince\Shopify\\{$class}";
            if ($interface) {
                if (false !== strpos($fullClass, 'Interface')) {
                    yield $fullClass;
                }
            } else {
                if (false === strpos($fullClass, 'Interface')) {
                    yield $fullClass;
                }
            }
        }
    }

    protected function globalModelClass()
    {
        foreach ($this->getClassesFile($this->options['model_dir']) as $file) {
            if ($file->isDir()) {
                continue;
            }
            $class = strstr($file->getPathname(), 'Model');
            $class = str_replace('.php', '', $class);
            $fullClass = "Slince\Shopify\\{$class}";
            yield $fullClass;
        }
    }

    protected function getClassMetadata()
    {
        if (null !== $this->metadataFactory) {
            return $this->metadataFactory;
        }
        $propertyNamingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
        $typeParser = new Parser();
        $driverFactory = new DefaultDriverFactory(
            $propertyNamingStrategy,
            $typeParser
        );
        $driverFactory = new DocBlockDriverFactory($driverFactory, $typeParser);
        $annotationReader = new AnnotationReader();
        $metadataDriver = $driverFactory->createDriver([
            'Slince\\Shopify\\Model' => $this->options['serializer_dir'] . '/builtin'
        ], $annotationReader);
        $metadataFactory = new MetadataFactory($metadataDriver, null, true);
        return $this->metadataFactory = $metadataFactory;
    }
}
