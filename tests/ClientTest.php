<?php

namespace Slince\Shopify\Tests;

use GuzzleHttp\Utils;
use Slince\Shopify\Client;
use Slince\Shopify\Exception\RuntimeException;
use Slince\Shopify\Exception\ClientException;
use Slince\Shopify\PublicAppCredential;
use Slince\Shopify\Exception\InvalidArgumentException;
use Slince\Shopify\Service\Common\ManagerInterface;

include_once __DIR__.'/Hydrator/test_classes.php';

class ClientTest extends TestCase
{
    public function testShop()
    {
        $client = new Client('bar.myshopify.com', new PublicAppCredential('foobarbazfoobarbaz'), [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $this->assertEquals('bar.myshopify.com', $client->getShop());
        try{
            new Client('ab', new PublicAppCredential('foobarbazfoobarbaz'));
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }

        try{
            $client = new Client('bar', new PublicAppCredential('foobarbazfoobarbaz'));
            $client->setShop(str_repeat('abc', 100).'.myshopify.com');
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }
    }

    public function testGet()
    {
        $client = $this->getClientMock('Products/Product/view.json');
        $json = $client->get('products/1');
        $this->assertNotEmpty($json);
        $this->assertNotEmpty($json['product']);
    }

    public function testPost()
    {
        $data = $this->readFixture('Products/Product/view.json');
        $client = $this->getClientMock('Products/Product/view.json');
        $json = $client->post('products', $data);
        $this->assertNotEmpty($json);
        $this->assertNotEmpty($json['product']);
        $this->assertEquals($json, $data);
    }

    public function testPut()
    {
        $data = $this->readFixture('Products/Product/view.json');
        $client = $this->getClientMock('Products/Product/view.json');
        $json = $client->put('products', $data);
        $this->assertNotEmpty($json);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDelete()
    {
        $client = $this->getClientMock('Products/Product/delete.json');
        $client->delete('products/1');
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDeleteNoContent()
    {
        $client = $this->getClientMock('Discounts/PriceRule/delete.json');
        $client->delete('price_rules/1');
    }

    public function testCredential()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $client = new Client('bar.myshopify.com', $credential, [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $this->assertEquals($credential, $client->getCredential());
    }

    public function testGetManager()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $client = new Client('bar.myshopify.com', $credential, [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);

        foreach ($client->serviceClass as $serviceClass) {
            $partials = explode('\\', $serviceClass);
            $manager = call_user_func([$client, 'get'.$partials[3].'Manager']);

            $this->assertInstanceOf($serviceClass, $manager);
        }
    }

    public function testAddMetaDir()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $client = new Client('bar.myshopify.com', $credential, [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $client->addMetaDir('', __DIR__ . '/Hydrator/serializer');
        $hydrator = $client->getHydrator();
        $post = $hydrator->hydrate([
            'title' => 'this is a post title',
            'body' => 'this is a post body',
            'category' => [
                'name' => 'test category',
            ],
            'comments' => [
                [
                    'body' => 'comment 1',
                ],
                [
                    'body' => 'comment 2',
                ],
            ],
            'created_at' => '2018-01-30T09:42:13+0000',
        ], \Post::class);
        $this->assertInstanceOf(\Post::class, $post);

        $this->expectException(RuntimeException::class);
        $client->addMetaDir('', __DIR__ . '/Hydrator/serializer2');
    }

    public function testCustomService()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $client = new Client('bar.myshopify.com', $credential, [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $client->addServiceClass(FooPostManager::class);
        $this->assertInstanceOf(FooPostManager::class, $client->getFooPostManager());
        $this->expectException(InvalidArgumentException::class);
        $client->addServiceClass(BarPostManager::class);
    }

    public function testVersion()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        try {
            new Client('bar.myshopify.com', $credential, [
                'metaCacheDir' => __DIR__ . '/tmp',
                'apiVersion' => '201809'
            ]);
            new Client('bar.myshopify.com', $credential, [
                'metaCacheDir' => __DIR__ . '/tmp',
                'apiVersion' => '2018-092'
            ]);
            new Client('bar.myshopify.com', $credential, [
                'metaCacheDir' => __DIR__ . '/tmp',
                'apiVersion' => 'unstableas'
            ]);
            new Client('bar.myshopify.com', $credential, [
                'metaCacheDir' => __DIR__ . '/tmp',
                'apiVersion' => 'prefixunstable'
            ]);
            $this->fail('fail to check version');
        } catch (InvalidArgumentException $exception) {
        }
        new Client('bar.myshopify.com', $credential, [
            'metaCacheDir' => __DIR__ . '/tmp',
            'apiVersion' => 'unstable'
        ]);
        new Client('bar.myshopify.com', $credential, [
            'metaCacheDir' => __DIR__ . '/tmp',
            'apiVersion' => '2019-10'
        ]);
    }

    public function testClientException()
    {
        $httpClientMock = $this->getMockBuilder(\GuzzleHttp\Client::class)
            ->setConstructorArgs([
                ['verify' => true]
            ])
            ->onlyMethods(['send'])
            ->getMock();

        $httpClientMock->method('send')
            ->willThrowException(
                new \GuzzleHttp\Exception\RequestException(
                    'Client error message.',
                    new \GuzzleHttp\Psr7\Request('GET', '/admin/shop.json'),
                    new \GuzzleHttp\Psr7\Response(401)
                )
            );

        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $client = new Client('bar.myshopify.com', $credential, [
            'metaCacheDir' => __DIR__ . '/tmp',
            'httpClient' => $httpClientMock,
        ]);

        try {
            $client->getShopManager()->get();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(ClientException::class, $exception);
            $this->assertEquals($exception->getMessage(), 'Client error message.');
            $this->assertEquals($exception->getCode(), 401);
        }
    }
}

class FooPostManager implements ManagerInterface
{
    public function getClient()
    {
    }

    public function createMany(array $data, $modelClass = null)
    {
    }

    public function fromArray(array $data, $modelClass = null)
    {
    }

    public function toArray($model)
    {
    }

    public static function getServiceName()
    {
        return 'foo_posts';
    }
}

class BarPostManager
{
    public static function getServiceName()
    {
        return 'foo_posts';
    }
}