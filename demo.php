<?php
include __DIR__ . '/vendor/autoload.php';

$finder = new \Symfony\Component\Finder\Finder();

$files = $finder->in('./src/Manager')->files()
    ->notName('*Manager*');
foreach ($files as $file) {
//    var_dump($file->getBasename());
//    exit;
    copy($file->getPathname(), __DIR__ . '/src/Model/'. $file->getBasename());
}