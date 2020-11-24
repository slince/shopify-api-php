<p align="center">
    <img src="https://cdn.shopify.com/shopify-marketing_assets/builds/19.0.0/shopify-full-color-black.svg" width="300"/> 
</p>

<p align="center">:rocket: PHP SDK for the Shopify API</p>

<p align="center">
    <a href="LICENSE" target="_blank">
        <img alt="Software License" src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square">
    </a>
    <a href="https://travis-ci.org/slince/shopify-api-php">
        <img src="https://img.shields.io/travis/slince/shopify-api-php/master.svg?style=flat-square" alt="Build Status">
    </a>
    <a href="https://codecov.io/github/slince/shopify-api-php">
        <img src="https://img.shields.io/codecov/c/github/slince/shopify-api-php.svg?style=flat-square" alt="Coverage Status">
    </a>
    <a href="https://packagist.org/packages/slince/shopify-api-php">
        <img src="https://img.shields.io/packagist/v/slince/shopify-api-php.svg?style=flat-square&amp;label=stable" alt="Latest Stable Version">
    </a>
    <a href="https://scrutinizer-ci.com/g/slince/shopify-api-php/?branch=master">
        <img src="https://img.shields.io/scrutinizer/g/slince/shopify-api-php.svg?style=flat-square" alt="Scrutinizer">
    </a>
</p>

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

$credential = new Slince\Shopify\PublicAppCredential('Access Token');
// Or Private App
$credential = new Slince\Shopify\PrivateAppCredential('API KEY', 'PASSWORD', 'SHARED SECRET');

$client = new Slince\Shopify\Client($credential, 'your-store.myshopify.com', [
    'metaCacheDir' => './tmp', // Metadata cache dir, required
    'apiVersion' => '2020-01' // API version
]);
```

### Use Manager to manipulate your data;

* Lists products
```php
$products = $client->getProductManager()->findAll([
    // Filter your product
    'collection_id' => 841564295
    'page' => 2 // deprecated
]);
```

* Lists products by pagination

```php
$pagination = $client->getProductManager()->paginate([
    // filter your product
    'limit' => 3,
    'created_at_min' => '2015-04-25T16:15:47-04:00'
]);
// $pagination is instance of `Slince\Shopify\Common\CursorBasedPagination`

$currentProducts = $pagination->current(); //current page

while ($pagination->hasNext()) {
    $nextProducts = $pagination->next();
}

# to persist across requests you can use next_page_info and previous_page_info
$nextPageInfo = $pagination->getNextPageInfo();
$prevPageInfo = $pagination->getPrevPageInfo();

$products = $pagination->current($nextPageInfo);
```

* Get the specified product
```php
$product = $client->getProductManager()->find(12800);

// Update the given product
$product = $client->getProductManager()->update(12800, [
      "title" => "Burton Custom Freestyle 151",
      "body_html" => "<strong>Good snowboard!<\/strong>",
      "vendor"=> "Burton",
      "product_type" => "Snowboard",
]);
```

* Creates a new product
```php
$product = $client->getProductManager()->create([
      "title" => "Burton Custom Freestyle 151",
      "body_html" => "<strong>Good snowboard!<\/strong>",
      "vendor"=> "Burton",
      "product_type" => "Snowboard",
]);
```

* Removes the product by its id
```php
$client->getProductManager()->remove(12800);
```
The product is an instance of `Slince\Shopify\Manager\Product\Product`; You can access properties like following:
 
```php
echo $product->getTitle();
echo $product->getCreatedAt(); // DateTime Object
//...
print_r($product->getVariants());
print_r($product->getImages());
```

Available managers:

- [Article](./src/Manager/Article/ArticleManagerInterface.php)
- [Asset](./src/Manager/Asset/AssetManagerInterface.php)
- [Blog](./src/Manager/Blog/BlogManagerInterface.php)
- [CarrierService](./src/Manager/CarrierService/CarrierServiceManagerInterface.php)
- [Collect](./src/Manager/Collect/CollectManagerInterface.php)
- [Comment](./src/Manager/Comment/CommentManagerInterface.php)
- [Country](./src/Manager/Country/CountryManagerInterface.php)
- [CustomCollection](./src/Manager/CustomCollection/CustomCollectionManagerInterface.php)
- [Customer](./src/Manager/Customer/CustomerManagerInterface.php)
- [CustomerAddress](./src/Manager/CustomerAddress/AddressManagerInterface.php)
- [CustomerSavedSearch](./src/Manager/CustomerSavedSearch/CustomerSavedSearchManagerInterface.php)
- [DiscountCode](./src/Manager/DiscountCode/DiscountCodeManagerInterface.php)
- [DraftOrder](./src/Manager/DraftOrder/DraftOrderManagerInterface.php)
- [Fulfillment](./src/Manager/Fulfillment/FulfillmentManagerInterface.php)
- [FulfillmentService](./src/Manager/FulfillmentService/FulfillmentServiceManagerInterface.php)
- [InventoryItem](./src/Manager/InventoryItem/InventoryItemManagerInterface.php)
- [InventoryLevel](./src/Manager/InventoryLevel/InventoryLevelManagerInterface.php)
- [Location](./src/Manager/Location/LocationManagerInterface.php)
- [Order](./src/Manager/Order/OrderManagerInterface.php)
- [OrderRisk](./src/Manager/OrderRisk/RiskManagerInterface.php)
- [Page](./src/Manager/Page/PageManagerInterface.php)
- [Policy](./src/Manager/Policy/PolicyManagerInterface.php)
- [PriceRule](./src/Manager/PriceRule/PriceRuleManagerInterface.php)
- [Product](./src/Manager/Product/ProductManagerInterface.php)
- [ProductImage](./src/Manager/ProductImage/ImageManagerInterface.php)
- [ProductVariant](./src/Manager/ProductVariant/VariantManagerInterface.php)
- [Province](./src/Manager/Province/ProvinceManagerInterface.php)
- [RecurringApplicationCharge](./src/Manager/RecurringApplicationCharge/RecurringApplicationChargeManagerInterface.php)
- [Redirect](./src/Manager/Redirect/RedirectManagerInterface.php)
- [Refund](./src/Manager/Refund/RefundManagerInterface.php)
- [ScriptTag](./src/Manager/ScriptTag/ScriptTagManagerInterface.php)
- [ShippingZone](./src/Manager/ShippingZone/ShippingZoneManagerInterface.php)
- [Shop](./src/Manager/Shop/ShopManagerInterface.php)
- [SmartCollection](./src/Manager/SmartCollection/SmartCollectionManagerInterface.php)
- [Theme](./src/Manager/Theme/ThemeManagerInterface.php)
- [Transaction](./src/Manager/Transaction/TransactionManagerInterface.php)
- [Webhook](./src/Manager/Webhook/WebhookManagerInterface.php)

You can access the manager like `$client->getProductManager()`, `$client->getOrderManager()`. 

### Basic CURD

If you don't like to use managers, you can also manipulate data like this: 

The returned value is just an array;

```php
$products = $client->get('products', [
    // Filter your products
]);

$product = $client->get('products/12800');

$product = $client->post('products', [
    "product" => [
        "title" => "Burton Custom Freestyle 151",
        "body_html" => "<strong>Good snowboard!<\/strong>",
        "vendor"=> "Burton",
        "product_type" => "Snowboard",
        "images" => [
            [ 
                "attachment" => "R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==\n"
            ]
        ]
     ]
]);

$product = $client->put('products/12800', [
    "product" => [
        "title" => "Burton Custom Freestyle 151",
        "body_html" => "<strong>Good snowboard!<\/strong>",
        "vendor"=> "Burton",
        "product_type" => "Snowboard",
        "images" => [
            [ 
                "attachment" => "R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==\n"
            ]
        ]
     ]
]);

$client->delete('products/12800');
```

## LICENSE

The MIT license. See [MIT](https://opensource.org/licenses/MIT)
