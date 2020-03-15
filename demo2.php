<?php
include __DIR__ . '/vendor/autoload.php';

$credential = new \Slince\Shopify\PublicAppCredential('16cb595223c5af97b2cc5c5f6364a3b8');

$client = new \Slince\Shopify\Client($credential, 'super-popup.myshopify.com', ['metaCacheDir' => './tests/tmp']);

$pagination = $client->getProductManager()->paginate(['limit' => 2]);

$products = $pagination->current();

print_r($products[1]->getTitle()); echo PHP_EOL;

$products = $pagination->next();
print_r($products[1]->getTitle());echo PHP_EOL;

$products = $pagination->next();
print_r($products[1]->getTitle());echo PHP_EOL;
