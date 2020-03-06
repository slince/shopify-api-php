<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\DiscountCodeManager;


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