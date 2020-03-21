<?php

/**
 * @var Slince\Shopify\Client
 */
$client = include __DIR__ . '/0-authorization.php';

//Lists products
$products = $client->getProductManager()->findAll([
    // filter your product
    'limit' => 3,
    'created_at_min' => '2014-04-25T16:15:47-04:00'
]);

// Paginate
$pagination = $client->getProductManager()->paginate([
    // filter your product
    'limit' => 3,
    'created_at_min' => '2014-04-25T16:15:47-04:00'
]);

// $pagination is instance of `Slince\Shopify\Common\CursorBasedPagination`
$products = $pagination->current();
while ($pagination->hasNext()) {
    $products = $pagination->next();
}

# to persist across requests you can use next_page_info and previous_page_info
$nextPageInfo = $pagination->getNextPageInfo();
$prevPageInfo = $pagination->getPrevPageInfo();

$products = $pagination->current($nextPageInfo);

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

