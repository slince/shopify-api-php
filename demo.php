<?php
include __DIR__ . '/vendor/autoload.php';

$finder = new \Symfony\Component\Finder\Finder();

$files = $finder->in('./src/Model')->files();
foreach ($files as $file) {
    $content = file_get_contents($file->getPathname());

    $content = preg_replace_callback('#^namespace.*;$#', function (){
        return 'namespace Slince\Shopify\Model;';
    }, $content);

    print $content;
    exit;
}