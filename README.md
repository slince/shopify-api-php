# PHP SDK for the Shopify API

[![Build Status](https://img.shields.io/travis/slince/shopify-api-php/master.svg?style=flat-square)](https://travis-ci.org/slince/shopify-api-php)
[![Coverage Status](https://img.shields.io/codecov/c/github/slince/shopify-api-php.svg?style=flat-square)](https://codecov.io/github/slince/shopify-api-php)
[![Latest Stable Version](https://img.shields.io/packagist/v/slince/shopify-api-php.svg?style=flat-square&label=stable)](https://packagist.org/packages/slince/shopify-api-php)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/slince/shopify-api-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/slince/shopify-api-php/?branch=master)

## Installation

Install via composer

```bash
$ composer require slince/shopify-api-php
```

## Quick Start

### Initialize the client

You first need to initialize the client. For that you need your Shop Name and AccessToken

```php
require __DIR__ . '/vendor/autoload.php';

$credential = new Slince\Shopify\Credential('Access Token');

$client  = new Slince\Shopify\Client($credential, 'Shop Name');  //e.g. your-store.myshopify.com
```

### Use Manager to manipulate your data;

```php
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
$product = $client->getProductManager()->post([
      "title" => "Burton Custom Freestyle 151",
      "body_html" => "<strong>Good snowboard!<\/strong>",
      "vendor"=> "Burton",
      "product_type" => "Snowboard",
]);

//Removes the product by its id
$client->getProductManager()->delete(12800);
```
The product is an instance of `Slince\Shopify\Manager\Product\Product`; You can access properties like following:
 
```php
echo $product->getTitle();
echo $product->getCreatedAt() // DateTime Object
//...
print_r($product->getVariants());
print_r($product->getImages());
```

Available managers:

- [Article](./src/Manager/Article/ArticleManagerInterface.php)
- [Assetr](./src/Manager/Asset/AssetManagernterface.php)
- [Blog](./src/Manager/Blog/BlogManagerInterface.php)
- [CarrierService](./src/Manager/CarrierService/CarrierServiceManagerInterface.php)
- [Collect](./src/Manager/Collect/CollectManagerInterface.php)
- [Comment](./src/Manager/Comment/CommentManagerInterface.php)
- [Country](./src/Manager/Country/CountryManagerInterface.php)
- [CustomCollection](./src/Manager/CustomCollection/CustomCollectionManagerInterface.php)
- [Customer](./src/Manager/Customer/CustomerManagerInterface.php)
- [CustomerAddress](./src/Manager/CustomerAddress/AddressManagerInterface.php)
- [CustomerSavedSearch](./src/Manager/CustomerSavedSearch/CustomerSavedSearchManagerInterface.php)
- [Fulfillment](./src/Manager/Fulfillment/FulfillmentManagerInterface.php)
- [FulfillmentService](./src/Manager/FulfillmentService/FulfillmentServiceManagerInterface.php)
- [Location](./src/Manager/Location/LocationManagerInterface.php)
- [Order](./src/Manager/Order/OrderManagerInterface.php)
- [OrderRisk](./src/Manager/OrderRisk/OrderRiskManagerInterface.php)
- [Page](./src/Manager/Page/PageManagerInterface.php)
- [Policy](./src/Manager/Policy/PolicyManagerInterface.php)
- [Product](./src/Manager/Product/ProductManagerInterface.php)
- [ProductImage](./src/Manager/ProductImage/ImageManagerInterface.php)
- [ProductVariant](./src/Manager/ProductVariant/VariantManagerInterface.php)
- [Province](./src/Manager/Province/ProvinceManagerInterface.php)
- [Redirect](./src/Manager/Redirect/RedirectManagerInterface.php)
- [Refund](./src/Manager/Refund/RefundManagerInterface.php)
- [ShippingZone](./src/Manager/ShippingZone/ShippingZoneManagerInterface.php)
- [Shop](./src/Manager/Shop/ShopManagerInterface.php)
- [Theme](./src/Manager/Theme/ThemeManagerInterface.php)
- [Transaction](./src/Manager/Transaction/TransactionManagerInterface.php)
- [Webhook](./src/Manager/Webhook/WebhookManagerInterface.php)

You can access the manager like `$client->getProductManager()`, `$client->getOrderManager()`. 

### Basic CURD

If you don't like to use managers, you can also manipulate data like this: 

The returned value is just an array;

```php
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
```

## LICENSE

The MIT license. See [MIT](https://opensource.org/licenses/MIT)