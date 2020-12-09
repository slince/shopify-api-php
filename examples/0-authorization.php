<?php

include __DIR__ . '/../vendor/autoload.php';

$shopName = 'super-popup.myshopify.com';

//Public App, link
//https://help.shopify.com/api/getting-started/authentication/oauth
$credential = new Slince\Shopify\PublicAppCredential(
    'e2ea49ec1155317f61d68ec26a0f99b6'
);

//Or Private App, link:
// https://help.shopify.com/api/getting-started/authentication/private-authentication
$credential = new Slince\Shopify\PrivateAppCredential(
    'd1b40509be0b57d62a83df43c59339fa',
    'b89612108911b3a4880c86f8f3e90def',
    '65552e922af3769339b79f1217bab78b'
);



$client = new Slince\Shopify\Client($shopName, $credential, [
    'metaCacheDir' => './tmp' //Metadata cache dir, required
]);

return $client;