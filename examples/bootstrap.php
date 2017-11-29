<?php
include __DIR__ . '/../vendor/autoload.php';

define('SHOP_NAME', 'hommecart.myshopify.com');
define('ACCESS_TOKEN', 'a627e6839c9a14d3102f8391e27a82a4');

$client = new \Slince\Shopify\Client(ACCESS_TOKEN, SHOP_NAME);