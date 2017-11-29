<?php

namespace Slince\Shopify\Tests\Base;

use PHPUnit\Framework\TestCase;
use Slince\Shopify\AccessToken;
use Slince\Shopify\Exception\InvalidArgumentException;

class AccessTokenTest extends TestCase
{
    public function testConstructor()
    {
        $accessToken = new AccessToken('foobarbazfoobarbaz');
        $this->assertEquals('foobarbazfoobarbaz', $accessToken);
    }

    public function testValidate()
    {
        try {
            new AccessToken('foo');
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }
        try {
            new AccessToken(str_repeat('foo', 100));
            $this->fail();
        } catch (\Exception $exception) {
            $this->assertInstanceOf(InvalidArgumentException::class, $exception);
        }
    }
}