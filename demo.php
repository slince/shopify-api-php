<?php
include __DIR__ . '/vendor/autoload.php';

$finder = new \Symfony\Component\Finder\Finder();

$files = $finder->in('./src/Manager/')->files()
    ->notName('*Manager*');
foreach ($files as $file) {
    copy($file->getPathname(), __DIR__ . '/tests/Model/' . $file->getBasename());
}