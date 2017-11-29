<?php

namespace Slince\Shopify\Tests;

use GuzzleHttp\Psr7\Request;
use Slince\Shopify\PublicAppCredential;
use Slince\Shopify\Exception\InvalidArgumentException;

class PublicAppCredentialTest extends \PHPUnit\Framework\TestCase
{
    public function testAccessToken()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $this->assertEquals('foobarbazfoobarbaz', $credential->getAccessToken());
        try{
            new PublicAppCredential('foo');
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }

        try{
            new PublicAppCredential(str_repeat('abc', 100));
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }
    }

    public function testApplyToRequest()
    {
        $credential = new PublicAppCredential('foobarbazfoobarbaz');
        $request = new Request('get', 'http://you-store.myshopify.com/admin/products.json');
        $request = $credential->applyToRequest($request);

        $this->assertEquals('foobarbazfoobarbaz', $request->getHeaderLine('X-Shopify-Access-Token'));
    }
}