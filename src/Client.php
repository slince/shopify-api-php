<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify;

use GuzzleHttp\Utils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Slince\Di\Container;
use GuzzleHttp\Client as HttpClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slince\Shopify\Common\Manager\ManagerInterface;
use Slince\Shopify\Exception\InvalidArgumentException;
use GuzzleHttp\Exception\RequestException;
use Slince\Shopify\Exception\ClientException;
use Slince\Shopify\Exception\RuntimeException;
use Slince\Shopify\Hydrator\Hydrator;

/**
 * @method Manager\Article\ArticleManagerInterface getArticleManager
 * @method Manager\Asset\AssetManagerInterface getAssetManager
 * @method Manager\Blog\BlogManagerInterface getBlogManager
 * @method Manager\CarrierService\CarrierServiceManagerInterface getCarrierServiceManager
 * @method Manager\Collect\CollectManagerInterface getCollectManager
 * @method Manager\Comment\CommentManagerInterface getCommentManager
 * @method Manager\Country\CountryManagerInterface getCountryManager
 * @method Manager\CustomCollection\CustomCollectionManagerInterface getCustomCollectionManager
 * @method Manager\Customer\CustomerManagerInterface getCustomerManager
 * @method Manager\CustomerAddress\AddressManagerInterface getCustomerAddressManager
 * @method Manager\CustomerSavedSearch\CustomerSavedSearchManagerInterface getCustomerSavedSearchManager
 * @method Manager\DiscountCode\DiscountCodeManagerInterface getDiscountCodeManager
 * @method Manager\DraftOrder\DraftOrderManagerInterface getDraftOrderManager
 * @method Manager\Fulfillment\FulfillmentManagerInterface getFulfillmentManager
 * @method Manager\FulfillmentService\FulfillmentServiceManagerInterface getFulfillmentServiceManager
 * @method Manager\InventoryItem\InventoryItemManagerInterface getInventoryItemManager
 * @method Manager\InventoryLevel\InventoryLevelManagerInterface getInventoryLevelManager
 * @method Manager\Location\LocationManagerInterface getLocationManager
 * @method Manager\Order\OrderManagerInterface getOrderManager
 * @method Manager\OrderRisk\RiskManagerInterface getOrderRiskManager
 * @method Manager\Page\PageManagerInterface getPageManager
 * @method Manager\Policy\PolicyManagerInterface getPolicyManager
 * @method Manager\PriceRule\PriceRuleManagerInterface getPriceRuleManager
 * @method Manager\Product\ProductManagerInterface getProductManager
 * @method Manager\ProductImage\ImageManagerInterface getProductImageManager
 * @method Manager\ProductVariant\VariantManagerInterface getProductVariantManager
 * @method Manager\Province\ProvinceManagerInterface getProvinceManager
 * @method Manager\RecurringApplicationCharge\RecurringApplicationChargeManagerInterface getRecurringApplicationChargeManager
 * @method Manager\Redirect\RedirectManagerInterface getRedirectManager
 * @method Manager\Refund\RefundManagerInterface getRefundManager
 * @method Manager\ShippingZone\ShippingZoneManagerInterface getShippingZoneManager
 * @method Manager\Shop\ShopManagerInterface getShopManager
 * @method Manager\SmartCollection\SmartCollectionManager getSmartCollectionManager
 * @method Manager\Theme\ThemeManagerInterface getThemeManager
 * @method Manager\Transaction\TransactionManagerInterface getTransactionManager
 * @method Manager\Webhook\WebhookManagerInterface getWebhookManager
 */
class Client
{
    const NAME = 'SlinceShopifyClient';
    const VERSION = '2.4.0';

    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var Container
     */
    protected $container;

    /**
     * @var CredentialInterface
     */
    protected $credential;

    /**
     * The shop.
     *
     * @var string
     */
    protected $shop;

    /**
     * @var string
     */
    protected $apiVersion = '2019-10';

    /**
     * @var ResponseInterface
     */
    protected $lastResponse;

    /**
     * Array of services classes.
     *
     * @var array
     */
    public $serviceClass = [
        Manager\Article\ArticleManager::class,
        Manager\Asset\AssetManager::class,
        Manager\Blog\BlogManager::class,
        Manager\CarrierService\CarrierServiceManager::class,
        Manager\Collect\CollectManager::class,
        Manager\Comment\CommentManager::class,
        Manager\Country\CountryManager::class,
        Manager\CustomCollection\CustomCollectionManager::class,
        Manager\Customer\CustomerManager::class,
        Manager\CustomerAddress\AddressManager::class,
        Manager\CustomerSavedSearch\CustomerSavedSearchManager::class,
        Manager\DiscountCode\DiscountCodeManager::class,
        Manager\DraftOrder\DraftOrderManager::class,
        Manager\Fulfillment\FulfillmentManager::class,
        Manager\FulfillmentService\FulfillmentServiceManager::class,
        Manager\InventoryItem\InventoryItemManager::class,
        Manager\InventoryLevel\InventoryLevelManager::class,
        Manager\Location\LocationManager::class,
        Manager\Order\OrderManager::class,
        Manager\OrderRisk\RiskManager::class,
        Manager\Page\PageManager::class,
        Manager\Policy\PolicyManager::class,
        Manager\PriceRule\PriceRuleManager::class,
        Manager\Product\ProductManager::class,
        Manager\ProductImage\ImageManager::class,
        Manager\ProductVariant\VariantManager::class,
        Manager\Province\ProvinceManager::class,
        Manager\RecurringApplicationCharge\RecurringApplicationChargeManager::class,
        Manager\Redirect\RedirectManager::class,
        Manager\Refund\RefundManager::class,
        Manager\ScriptTag\ScriptTagManager::class,
        Manager\ShippingZone\ShippingZoneManager::class,
        Manager\Shop\ShopManager::class,
        Manager\SmartCollection\SmartCollectionManager::class,
        Manager\Theme\ThemeManager::class,
        Manager\Transaction\TransactionManager::class,
        Manager\Webhook\WebhookManager::class,
    ];

    protected $metaDirs = [
        'Slince\Shopify' => __DIR__.'/../config/serializer'
    ];

    /**
     * Whether delay the next request.
     *
     * @var bool
     */
    protected static $delayNextRequest = false;

    /**
     * @var string
     */
    protected $metaCacheDir;

    /**
     * @var Hydrator
     */
    protected $hydrator;

    public function __construct(CredentialInterface $credential, $shop, array $options = [])
    {
        $this->container = new Container();
        $this->container->register($this);
        $this->credential = $credential;
        $this->setShop($shop);
        $this->applyOptions($options);
        $this->initializeBaseServices();
    }

    public function __call($name, $arguments)
    {
        if ('Manager' === substr($name, -7)) {
            $serviceName = substr($name, 3, -7);

            return $this->container->get(Inflector::tableize(Inflector::pluralize($serviceName)));
        }
        throw new \InvalidArgumentException(sprintf('The method "%s" is not exists', $name));
    }

    /**
     * Gets the credential.
     *
     * @return CredentialInterface
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * sets the shop name for the client.
     *
     * @param string $shop
     */
    public function setShop($shop)
    {
        if (!preg_match('/^[a-zA-Z0-9\-]{3,100}\.myshopify\.(?:com|io)$/', $shop)) {
            throw new InvalidArgumentException(
                'Shop name should be 3-100 letters, numbers, or hyphens e.g. your-store.myshopify.com'
            );
        }
        $this->shop = $shop;
    }

    /**
     * Gets the shop.
     *
     * @return string
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Sets the http client for the client.
     *
     * @param HttpClient $httpClient
     */
    public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Gets the http client.
     *
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if ($this->httpClient) {
            return $this->httpClient;
        }
        return $this->httpClient = new HttpClient([
            'verify' => false,
        ]);
    }

    /**
     * Perform a GET request.
     *
     * @param string $resource
     * @param array  $query
     *
     * @return array
     */
    public function get($resource, $query = [])
    {
        return $this->doRequest('GET', $resource, [
            'query' => $query,
        ]);
    }

    /**
     * Perform a POST request.
     *
     * @param string $resource
     * @param array  $data
     * @param array  $query
     *
     * @return array
     */
    public function post($resource, $data, $query = [])
    {
        return $this->doRequest('POST', $resource, [
            'query' => $query,
            'json' => $data,
        ]);
    }

    /**
     * Perform a PUT request.
     *
     * @param string $resource
     * @param array  $data
     * @param array  $query
     *
     * @return array
     */
    public function put($resource, $data, $query = [])
    {
        return $this->doRequest('PUT', $resource, [
            'query' => $query,
            'json' => $data,
        ]);
    }

    /**
     * Perform a DELETE request.
     *
     * @param string $resource
     * @param array  $query
     */
    public function delete($resource, $query = [])
    {
        $this->doRequest('DELETE', $resource, [
            'query' => $query
        ]);
    }

    /**
     * Send an HTTP request
     *
     * @param string $method
     * @param string $resource
     * @param array $options
     * @return array
     */
    protected function doRequest($method, $resource, $options = [])
    {
        $request = new Request($method, $this->buildUrl($resource), [
            'Content-Type' => 'application/json',
        ]);
        $response = $this->sendRequest($request, $options);
        $body = $response->getBody();

        return $body->getSize()
            ? Utils::jsonDecode($body, true)
            : [];
    }

    /**
     * Send a request.
     *
     * @param RequestInterface $request
     * @param array $options
     *
     * @return ResponseInterface
     * @throws GuzzleException
     * @codeCoverageIgnore
     */
    public function sendRequest(RequestInterface $request, array $options = [])
    {
        if (static::$delayNextRequest) {
            usleep(1000000 * rand(3, 10));
        }
        $request = $request->withHeader('User-Agent', static::NAME . '/' . static::VERSION);
        $request = $this->credential->applyToRequest($request);
        try {
            $response = $this->getHttpClient()->send($request, $options);
            $this->lastResponse = $response;
        } catch (RequestException $exception) {
            $exception = new ClientException($request, $exception->getResponse(), $exception->getMessage(), $exception->getCode());
            throw $exception;
        }
        list($callsMade, $callsLimit) = explode('/', $response->getHeaderLine('http_x_shopify_shop_api_call_limit'));
        static::$delayNextRequest = $callsMade / $callsLimit >= 0.8;
        return $response;
    }

    /**
     * Gets the latest http response.
     *
     * @return ResponseInterface
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

    /**
     * Builds an url by given resource name.
     *
     * @param string $resource
     *
     * @return string
     */
    protected function buildUrl($resource)
    {
        return sprintf('https://%s/admin/api/%s/%s.json', $this->shop, $this->apiVersion, $resource);
    }

    /**
     * Applies the array of request options to the client.
     *
     * @param array $options
     */
    protected function applyOptions(array $options)
    {
        isset($options['httpClient']) && $this->httpClient = $options['httpClient'];
        if (!isset($options['metaCacheDir'])) {
            throw new InvalidArgumentException('You must provide option "metaCacheDir"');
        }
        $this->metaCacheDir = $options['metaCacheDir'];
        if (isset($options['apiVersion'])) {
            if (!preg_match('/^[0-9]{4}-[0-9]{2}$|^unstable$/', $options['apiVersion'])) {
                throw new InvalidArgumentException('Version string must be of YYYY-MM or unstable');
            }
            $this->apiVersion = $options['apiVersion'];
        }
    }

    /**
     * Gets the hydrator instance.
     *
     * @return Hydrator
     */
    public function getHydrator()
    {
        if ($this->hydrator) {
            return $this->hydrator;
        }
        return $this->hydrator = new Hydrator($this->metaCacheDir, $this->metaDirs);
    }

    /**
     * Add a custom meta dir.
     *
     * @param string $namespace
     * @param string $path
     * @throws RuntimeException
     */
    public function addMetaDir($namespace, $path)
    {
        if ($this->hydrator) {
            throw new RuntimeException(sprintf('The hydrator has been built, you should add meta dir before getting manager.'));
        }
        $this->metaDirs[$namespace] = $path;
    }

    /**
     * Add a custom service class.
     *
     * @param string $serviceClass
     * @throws InvalidArgumentException
     */
    public function addServiceClass($serviceClass)
    {
        if (!is_subclass_of($serviceClass, ManagerInterface::class)) {
            throw new InvalidArgumentException(sprintf('The service class "%s" should implement "ManagerInterface"', $serviceClass));
        }
        $this->serviceClass[] = $serviceClass;
        $this->container->register($serviceClass::getServiceName(), $serviceClass);
    }

    /**
     * Initialize base services.
     */
    protected function initializeBaseServices()
    {
        foreach ($this->serviceClass as $serviceClass) {
            $this->container->register($serviceClass::getServiceName(), $serviceClass);
        }
    }
}
