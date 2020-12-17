<p align="center">
    <img src="https://cdn.shopify.com/shopify-marketing_assets/builds/19.0.0/shopify-full-color-black.svg" width="300"/> 
</p>

<p align="center">:rocket: PHP SDK for the Shopify API</p>

<p align="center">
    <a href="LICENSE" target="_blank">
        <img alt="Software License" src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square">
    </a>
    <a href="https://travis-ci.com/slince/shopify-api-php">
        <img src="https://img.shields.io/travis/com/slince/shopify-api-php/3.x?style=flat-square" alt="Build Status">
    </a>
    <a href="https://codecov.io/github/slince/shopify-api-php">
        <img src="https://img.shields.io/codecov/c/github/slince/shopify-api-php/3.x?style=flat-square" alt="Coverage Status">
    </a>
    <a href="https://packagist.org/packages/slince/shopify-api-php">
        <img src="https://img.shields.io/packagist/v/slince/shopify-api-php.svg?style=flat-square&amp;label=stable" alt="Latest Stable Version">
    </a>
    <a href="https://scrutinizer-ci.com/g/slince/shopify-api-php/?branch=master">
        <img src="https://img.shields.io/scrutinizer/g/slince/shopify-api-php.svg?style=flat-square" alt="Scrutinizer">
    </a>
    <a href="https://packagist.org/packages/slince/shopify-api-php">
        <img src="https://img.shields.io/packagist/dt/slince/shopify-api-php.svg?style=flat-square" alt="Total Downloads">
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

$client = new Slince\Shopify\Client('your-store.myshopify.com', $credential, [
    'meta_cache_dir' => './tmp' // Metadata cache dir, required
]);
```

### Middleware

Middleware augments the functionality of handlers by invoking them in the process of generating responses. Middleware is implemented as a higher order function that takes the following form.

```php

$middleware = function(\Psr\Http\Message\ServerRequestInterface $request, callable $next){
    $response = $next($request);
    $this->logger->log($request, $response);
    return $response;
};

$client->getMiddlewares()->push($middleware);
```
Built-in middleware:

- [DelayMiddleware](src/Middleware/DelayMiddleware.php) 

### Exception

The Client throws the following types of exceptions.

- [BadRequestException](src/Exception/BadRequestException.php) 400
- [UnauthorizedException](src/Exception/UnauthorizedException.php) 401
- [ForbiddenException](src/Exception/ForbiddenException.php) 403
- [NotFoundException](src/Exception/NotFoundException.php) 404
- [NotAcceptableException](src/Exception/NotAcceptableException.php) 406
- [UnprocessableEntityException](src/Exception/UnprocessableEntityException.php) 422
- [TooManyRequestsException](src/Exception/TooManyRequestsException.php) 429
- [ClientException](src/Exception/ClientException.php) other

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

- [Access\AccessScope](src/Service/Access/AccessScopeManagerInterface.php)
- [Access\StorefrontAccessToken](src/Service/Access/StorefrontAccessTokenManagerInterface.php)
- [Analytics\Report](src/Service/Analytics/ReportManagerInterface.php)
- [Billing\ApplicationCharge](src/Service/Billing/ApplicationChargeManagerInterface.php)
- [Billing\ApplicationCredit](src/Service/Billing/ApplicationCreditManagerInterface.php)
- [Billing\RecurringApplicationCharge](src/Service/Billing/RecurringApplicationChargeManagerInterface.php)
- [Billing\UsageCharge](src/Service/Billing/UsageChargeManagerInterface.php)
- [Customers\Address](src/Service/Customers/AddressManagerInterface.php)
- [Customers\Customer](src/Service/Customers/CustomerManagerInterface.php)
- [Customers\CustomerSavedSearch](src/Service/Customers/CustomerSavedSearchManagerInterface.php)
- [Discounts\DiscountCode](src/Service/Discounts/DiscountCodeManagerInterface.php)
- [Discounts\PriceRule](src/Service/Discounts/PriceRuleManagerInterface.php)
- [Events\Event](src/Service/Events/EventManagerInterface.php)
- [Events\Webhook](src/Service/Events/WebhookManagerInterface.php)
- [Inventory\InventoryItem](src/Service/Inventory/InventoryItemManagerInterface.php)
- [Inventory\InventoryLevel](src/Service/Inventory/InventoryLevelManagerInterface.php)
- [Inventory\Location](src/Service/Inventory/LocationManagerInterface.php)
- [MarketingEvent\MarketingEvent](src/Service/MarketingEvent/MarketingEventManagerInterface.php)
- [OnlineStore\Article](src/Service/OnlineStore/ArticleManagerInterface.php)
- [OnlineStore\Asset](src/Service/OnlineStore/AssetManagerInterface.php)
- [OnlineStore\Blog](src/Service/OnlineStore/BlogManagerInterface.php)
- [OnlineStore\Comment](src/Service/OnlineStore/CommentManagerInterface.php)
- [OnlineStore\Page](src/Service/OnlineStore/PageManagerInterface.php)
- [OnlineStore\Redirect](src/Service/OnlineStore/RedirectManagerInterface.php)
- [OnlineStore\ScriptTag](src/Service/OnlineStore/ScriptTagManagerInterface.php)
- [OnlineStore\Theme](src/Service/OnlineStore/ThemeManagerInterface.php)
- [Orders\DraftOrder](src/Service/Orders/DraftOrderManagerInterface.php)
- [Orders\Order](src/Service/Orders/OrderManagerInterface.php)
- [Orders\Refund](src/Service/Orders/RefundManagerInterface.php)
- [Orders\Risk](src/Service/Orders/RiskManagerInterface.php)
- [Orders\Transaction](src/Service/Orders/TransactionManagerInterface.php)
- [Products\Collect](src/Service/Products/CollectManagerInterface.php)
- [Products\CustomCollection](src/Service/Products/CustomCollectionManagerInterface.php)
- [Products\Image](src/Service/Products/ImageManagerInterface.php)
- [Products\Product](src/Service/Products/ProductManagerInterface.php)
- [Products\SmartCollection](src/Service/Products/SmartCollectionManagerInterface.php)
- [Products\Variant](src/Service/Products/VariantManagerInterface.php)
- [Shipping\AssignedFulfillmentOrder](src/Service/Shipping/AssignedFulfillmentOrderManagerInterface.php)
- [Shipping\CarrierService](src/Service/Shipping/CarrierServiceManagerInterface.php)
- [Shipping\Fulfillment](src/Service/Shipping/FulfillmentManagerInterface.php)
- [Shipping\FulfillmentOrder](src/Service/Shipping/FulfillmentOrderManagerInterface.php)
- [Shipping\FulfillmentService](src/Service/Shipping/FulfillmentServiceManagerInterface.php)
- [Store\Country](src/Service/Store/CountryManagerInterface.php)
- [Store\Currency](src/Service/Store/CurrencyManagerInterface.php)
- [Store\Policy](src/Service/Store/PolicyManagerInterface.php)
- [Store\Province](src/Service/Store/ProvinceManagerInterface.php)
- [Store\ShippingZone](src/Service/Store/ShippingZoneManagerInterface.php)
- [Store\Shop](src/Service/Store/ShopManagerInterface.php)

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
                "attachment" => "R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAw==\n"
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
                "attachment" => "R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAw==\n"
            ]
        ]
     ]
]);

$client->delete('products/12800');
```
## LICENSE

The MIT license. See [MIT](https://opensource.org/licenses/MIT)
