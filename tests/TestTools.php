<?php

namespace Slince\Shopify\Tests;

use Slince\Shopify\Model\Access\AccessScope;
use Slince\Shopify\Tests\Model\ModelTestCase;

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
}

$tools = new TestTools();
$tools->generateModelTests();
