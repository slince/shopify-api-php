<?php

include __DIR__ . '/../vendor/autoload.php';

$shopName = 'qimify.myshopify.com';

//Public App, link
//https://help.shopify.com/api/getting-started/authentication/oauth
$credential = new Slince\Shopify\PublicAppCredential(
    'f9a7793a8466c34193a3933aebf7d73a'
);

////Or Private App, link:
//// https://help.shopify.com/api/getting-started/authentication/private-authentication
//$credential = new Slince\Shopify\PrivateAppCredential(
//    'd1b40509be0b57d62a83df43c59339fa',
//    'b89612108911b3a4880c86f8f3e90def',
//    '65552e922af3769339b79f1217bab78b'
//);



$client = new Slince\Shopify\Client($shopName, $credential, [
    'meta_cache_dir' => './tmp', //Metadata cache dir, required
    'http_client' => new \GuzzleHttp\Client([
        'proxy' => '127.0.0.1:1080'
    ])
]);

return $client;