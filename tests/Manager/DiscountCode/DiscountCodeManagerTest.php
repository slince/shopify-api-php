<?php

namespace Slince\Shopify\Tests\DiscountCode;

use Slince\Shopify\Manager\DiscountCode\DiscountCodeManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class DiscountCodeManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'DiscountCode';
    }

    public function getServiceClass()
    {
        return DiscountCodeManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}