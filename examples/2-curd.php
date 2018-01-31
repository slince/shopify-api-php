<?php

/*
 * @var Slince\Shopify\Client
 */
$client = include __DIR__ . '/0-authorization.php';

$products = $client->get('products', [
    // filter your products
]);

$product = $client->get('products/12800');

$product = $client->post('products', [
    "title" => "Burton Custom Freestyle 151",
    "body_html" => "<strong>Good snowboard!<\/strong>",
    "vendor"=> "Burton",
    "product_type" => "Snowboard",
    "images" => [
        [
            "attachment" => "R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==\n"
        ]
    ]
]);

$product = $client->put('products/12800', [
    "title" => "Burton Custom Freestyle 151",
    "body_html" => "<strong>Good snowboard!<\/strong>",
    "vendor"=> "Burton",
    "product_type" => "Snowboard",
    "images" => [
        [
            "attachment" => "R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==\n"
        ]
    ]
]);

$client->delete('products/12800');