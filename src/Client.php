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

use Doctrine\Common\Inflector\Inflector;
use GuzzleHttp\Psr7\Request;
use Slince\Di\Container;
use GuzzleHttp\Client as HttpClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slince\Shopify\Exception\InvalidArgumentException;
use GuzzleHttp\Exception\RequestException;
use Slince\Shopify\Exception\ClientException;
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
 * @method Manager\Fulfillment\FulfillmentManagerInterface getFulfillmentManager
 * @method Manager\FulfillmentService\FulfillmentServiceManagerInterface getFulfillmentServiceManager
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
 * @method Manager\Theme\ThemeManagerInterface getThemeManager
 * @method Manager\Transaction\TransactionManagerInterface getTransactionManager
 * @method Manager\Webhook\WebhookManagerInterface getWebhookManager
 */
class Client
{
    const NAME = 'SlinceShopifyClient';

    const VERSION = '2.1.0';

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
        Manager\Fulfillment\FulfillmentManager::class,
        Manager\FulfillmentService\FulfillmentServiceManager::class,
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
        Manager\Theme\ThemeManager::class,
        Manager\Transaction\TransactionManager::class,
        Manager\Webhook\WebhookManager::class,
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
        $this->container->instance($this);
        $this->credential = $credential;
        $this->setShop($shop);
        $this->applyOptions($options);
        $this->hydrator = new Hydrator($this->metaCacheDir, __DIR__.'/../config/serializer');
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

    protected function doRequest($method, $resource, $options = [])
    {
        $request = new Request($method, $this->buildUrl($resource), [
            'User-Agent' => static::NAME . '/' . static::VERSION
        ]);
        $response = $this->sendRequest($request, $options);
        $body = $response->getBody();

        return $body->getSize()
            ? \GuzzleHttp\json_decode($body, true)
            : [];
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
        return sprintf('https://%s/admin/%s.json', $this->shop, $resource);
    }

    /**
     * Send a request.
     *
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return ResponseInterface
     * @codeCoverageIgnore
     */
    public function sendRequest(RequestInterface $request, array $options = [])
    {
        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $this->credential->applyToRequest($request);
        if (static::$delayNextRequest) {
            usleep(1000000 * rand(3, 10));
        }
        try {
            $response = $this->getHttpClient()->send($request, $options);
        } catch (RequestException $exception) {
            $exception = new ClientException($request, $exception->getResponse(), $exception->getMessage());
            throw $exception;
        }
        list($callsMade, $callsLimit) = explode('/', $response->getHeaderLine('http_x_shopify_shop_api_call_limit'));
        static::$delayNextRequest = $callsMade / $callsLimit >= 0.8;

        return $response;
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
    }

    /**
     * Gets the hydrator instance.
     *
     * @return Hydrator
     */
    public function getHydrator()
    {
        return $this->hydrator;
    }

    /**
     * Initialize base services.
     */
    protected function initializeBaseServices()
    {
        foreach ($this->serviceClass as $serviceClass) {
            $this->container->define($serviceClass::getServiceName(), $serviceClass);
        }
    }
}