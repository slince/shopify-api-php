<?php
include __DIR__ . '/vendor/autoload.php';

$finder = new \Symfony\Component\Finder\Finder();

//$files = $finder->in('./tests/Service/')->files();
//foreach ($files as $file) {
//    $content = file_get_contents($file->getPathname());
//    $filename = str_replace('Test', '', pathinfo($file->getFilename(), PATHINFO_FILENAME));
//    $content = preg_replace("/namespace Slince\\\\Shopify\\\\Tests\\\\.*/", "namespace Slince\Shopify\Tests\Service;", $content);
////    var_dump($content);
//    $content = str_replace("use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;", "", $content);
//    $content = str_replace("use Slince\Shopify\Tests\Base\NestCurdableTestCase;", "", $content);
//
//    $content = preg_replace("/use Slince\\\\Shopify\\\\Manager.*/", "use Slince\\Shopify\\Service\\{$filename}Manager;", $content);
////    var_dump($content);
//
//    file_put_contents($file->getPathname(), $content);
//}

$extractor = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor();

$types = $extractor->getTypes(\Slince\Shopify\Model\Order::class, 'fulfillments');

var_dump($types);