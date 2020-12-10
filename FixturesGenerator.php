<?php

include_once __DIR__ . '/vendor/autoload.php';

$tools = new FixturesGenerator();
$tools->generateServicesTests();

final class FixturesGenerator
{
    public function getClasses($path)
    {
        return new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path), \RecursiveIteratorIterator::SELF_FIRST);
    }

    public function generateModelTests()
    {
        foreach ($this->getClasses(__DIR__ . '/src/Model') as $file) {
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
        foreach ($this->getClasses(__DIR__ . '/src/Service') as $file) {
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
        foreach ($this->getClasses(__DIR__ . '/src/Service') as $file) {
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


    public function generateModelMapping()
    {
        foreach ($this->getClasses(__DIR__ . '/src/Model') as $file) {
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
            $fullClass = "Slince\Shopify\\{$class}";
            $this->getClassMetadata($fullClass);
//            exit;
        }
    }

    protected function getClassMetadata($class)
    {
        $ref = new \ReflectionClass($class);
        $metadata = [];
        foreach ($ref->getProperties() as $reflectionProperty) {
            $doc = $reflectionProperty->getDocComment();
            echo($doc);
        }
    }
}
