<?php
include __DIR__ . '/bootstrap.php';


$products = $client->products->findAll();

$product = $client->products->create([
    'title' => 'hehehe',
    'body_html' => 'sss',
    'product_type' => 'asas',
    'vendor' => 'adsa'
]);

$product = $client->products->update([
    'id' => $product->getId(),
    'title' => '6666',
    'body_html' => 'sss',
    'product_type' => 'asas',
    'vendor' => 'adsa'
]);

$count = $client->products->count();

$product = $client->products->find($product->getId());

$count = $client->products->delete($product->getId());
