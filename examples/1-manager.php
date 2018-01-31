<?php

/**
 * @var Slince\Shopify\Client
 */
$client = include __DIR__ . '/0-authorization.php';

//Lists products
$products = $client->getProductManager()->findAll([
    // filter your product
]);


//Get the specified product
$product = $client->getProductManager()->find(12800);

//Update the given product
$product = $client->getProductManager()->update(12800, [
    "title" => "Burton Custom Freestyle 151",
    "body_html" => "<strong>Good snowboard!<\/strong>",
    "vendor"=> "Burton",
    "product_type" => "Snowboard",
]);

//Creates a new product
$product = $client->getProductManager()->create([
    "title" => "Burton Custom Freestyle 151",
    "body_html" => "<strong>Good snowboard!<\/strong>",
    "vendor"=> "Burton",
    "product_type" => "Snowboard",
]);

//Removes the product by its id
$client->getProductManager()->delete(12800);

// The product is an instance of Slince\Shopify\Manager\Product\Product; You can access properties like following:

echo $product->getTitle();
echo $product->getCreatedAt(); // DateTime Object
print_r($product->getVariants());
print_r($product->getImages());

