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
            $filename = str_replace('.php', 'Test.php', $targetPath);
            $filename = ltrim($filename, 'src/');
//            print_r($filename);
            $namespace = dirname($filename);
            $class = str_replace('.php','', $filename);
            $baseClass = basename($filename);
            $content = <<<EOT
<?php

namespace Slince\Shopify\Tests\{$namespace};

use Slince\Shopify\{$class};
use Slince\Shopify\Tests\Model\ModelTestCase;

class AccessScopeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return {$baseClass}}::class;
    }
}
EOT;
            echo PHP_EOL;
            mkdir(dirname(__DIR__ . '/' . $filename), 0777, true);
            file_put_contents(__DIR__ . '/' . $filename, $content);
        }
    }
}

$tools = new TestTools();
$tools->generateModelTests();
