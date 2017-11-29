<?php

namespace Slince\Shopify\Tests;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Slince\Shopify\Client;
use Slince\Shopify\Credential;

class TestCase extends BaseTestCase
{
    const FIXTURES_DIR = __DIR__.'/Fixtures';

    const ACCESS_TOKEN = 'asdasdadasdadasda';

    const SHOP_NAME = 'asasa.myshopify.com';

    /**
     * @param string $fixture
     * @param int    $code
     * @param array  $headers
     *
     * @return Client
     */
    protected function getClientMock($fixture, $code = 200, $headers = [])
    {
        $fixture = static::FIXTURES_DIR.'/'.$fixture;
        $mock = $this->getMockBuilder(Client::class)
            ->setConstructorArgs([new Credential(static::ACCESS_TOKEN), static::SHOP_NAME])
            ->setMethods(['sendRequest'])
            ->getMock();
        $mock->method('sendRequest')
            ->willReturn(new Response($code, $headers, new Stream(fopen($fixture, 'r'))));

        return $mock;
    }
}