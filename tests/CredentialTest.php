<?php

namespace Slince\Shopify\Tests;

use Slince\Shopify\Credential;
use Slince\Shopify\Exception\InvalidArgumentException;

class CredentialTest extends \PHPUnit\Framework\TestCase
{
    public function testAccessToken()
    {
        $credential = new Credential('foobarbazfoobarbaz');
        $this->assertEquals('foobarbazfoobarbaz', $credential->getAccessToken());
        try{
            new Credential('foo');
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }

        try{
            new Credential(str_repeat('abc', 100));
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }
    }

    public function testKeyAndSecret()
    {
        $credential = new Credential('foobarbazfoobarbaz', 'foo', 'bar');
        $this->assertEquals('foo', $credential->getApiKey());
        $this->assertEquals('bar', $credential->getApiSecret());
    }
}