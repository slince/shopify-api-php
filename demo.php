<?php
include __DIR__ . '/vendor/autoload.php';

$finder = new \Symfony\Component\Finder\Finder();

$files = $finder->in('./src/Service/Contracts')->files();
foreach ($files as $file) {
    $content = file_get_contents($file->getPathname());

    $content = preg_replace_callback('#namespace\s.*#', function (){
        return 'namespace Slince\Shopify\Service\Contracts;';
    }, $content);

    file_put_contents($file->getPathname(), $content);
}