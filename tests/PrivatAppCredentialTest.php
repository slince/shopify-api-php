<?php

namespace Slince\Shopify\Tests;

use GuzzleHttp\Psr7\Request;
use Slince\Shopify\PrivateAppCredential;

class PrivatAppCredentialTest extends \PHPUnit\Framework\TestCase
{
    public function testGetter()
    {
        $credential = new PrivateAppCredential('foo', 'bar', 'baz');
        $this->assertEquals('foo', $credential->getApiKey());
        $this->assertEquals('bar', $credential->getPassword());
        $this->assertEquals('baz', $credential->getSharedSecret());
    }

    public function testApplyToRequest()
    {
        $credential = new PrivateAppCredential('foo', 'bar', 'baz');
        $request = new Request('get', 'http://you-store.myshopify.com/admin/products.json');
        $request = $credential->applyToRequest($request);

        $this->assertEquals('Basic '
            .base64_encode("{$credential->getApiKey()}:{$credential->getPassword()}"),
            $request->getHeaderLine('Authorization'));
    }
}