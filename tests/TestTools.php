<?php

namespace Slince\Shopify\Tests;

use Slince\Shopify\Service\Common\NestCrudManager;

class TestTools
{
    public function getClasses($path)
    {
        return new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path), \RecursiveIteratorIterator::SELF_FIRST);
    }

    public function generateModelTests()
    {
        foreach ($this->getClasses(__DIR__ . '/../src/Model') as $file) {
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
            @mkdir(dirname(__DIR__ . '/' . $filename), 0777, true);
            file_put_contents(__DIR__ . '/' . $filename, $content);
        }
    }

    public function generateServicesTests()
    {
        foreach ($this->getClasses(__DIR__ . '/../src/Service') as $file) {
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
                class_implements($fullClass, NestCrudManager::class)
            ) {
                $extendClass = "NestCurdManagerTestCase";
            } else {
                $extendClass = "GeneralCurdManagerTestCase";
            }
            $fullpathname = __DIR__ . '/' . $filename;
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
}

include __DIR__ . '/../vendor/autoload.php';

$tools = new TestTools();
$tools->generateServicesTests();
