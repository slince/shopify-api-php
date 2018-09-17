<?php

namespace Slince\Shopify\Tests;

use Slince\Shopify\Client;
use Slince\Shopify\PublicAppCredential;
use Slince\Shopify\Exception\InvalidArgumentException;

class ClientTest extends TestCase
{
    public function testShop()
    {
        $client = new Client(new PublicAppCredential('foobarbazfoobarbaz'), 'bar.myshopify.com', [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $this->assertEquals('bar.myshopify.com', $client->getShop());
        try{
            new Client(new PublicAppCredential('foobarbazfoobarbaz'),  'ab');
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }

        try{
            $client = new Client(new PublicAppCredential('foobarbazfoobarbaz'),  'bar');
            $client->setShop(str_repeat('abc', 100).'.myshopify.com');
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }
    }

    public function testHttpClient()
    {
        $client = new Client(new PublicAppCredential('foobarbazfoobarbaz'), 'bar.myshopify.com', [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $this->assertInstanceOf(\GuzzleHttp\Client::class, $client->getHttpClient());

        $httpClient = new \GuzzleHttp\Client([
            'verify' => true,
        ]);
        $client->setHttpClient($httpClient);
        $this->assertEquals($httpClient, $client->getHttpClient());
        $this->assertTrue($client->getHttpClient()->getConfig('verify'));

        $client = new Client(new PublicAppCredential('foobarbazfoobarbaz'), 'bar.myshopify.com', [
            'httpClient' => $httpClient,
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $this->assertEquals($httpClient, $client->getHttpClient());
    }

    public function testGet()
    {
        $client = $this->getClientMock('Product/view.json');
        $json = $client->get('products/1');
        $this->assertNotEmpty($json);
        $this->assertNotEmpty($json['product']);
    }

    public function testPost()
    {
        $data = \GuzzleHttp\json_decode(file_get_contents(static::FIXTURES_DIR.'/Product/view.json'), true);
        $client = $this->getClientMock('Product/view.json');
        $json = $client->post('products', $data);
        $this->assertNotEmpty($json);
        $this->assertNotEmpty($json['product']);
        $this->assertEquals($json, $data);
    }

    public function testPut()
    {
        $data = \GuzzleHttp\json_decode(file_get_contents(static::FIXTURES_DIR.'/Product/view.json'), true);
        $client = $this->getClientMock('Product/view.json');
        $json = $client->put('products', $data);
        $this->assertNotEmpty($json);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDelete()
    {
        $client = $this->getClientMock('Product/delete.json');
        $client->delete('products/1');
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testDeleteNoContent()
    {
        $client = $this->getClientMock('PriceRule/delete.json');
        $client->delete('price_rules/1');
    }

    public function testCredential()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $client = new Client($credential, 'bar.myshopify.com', [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);
        $this->assertEquals($credential, $client->getCredential());
    }

    public function testGetManager()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $client = new Client($credential, 'bar.myshopify.com', [
            'metaCacheDir' => __DIR__ . '/tmp'
        ]);

        foreach ($client->serviceClass as $serviceClass) {
            $partials = explode('\\', $serviceClass);
            $manager = call_user_func([$client, 'get'.$partials[3].'Manager']);

            $this->assertInstanceOf($serviceClass, $manager);
        }
    }
}