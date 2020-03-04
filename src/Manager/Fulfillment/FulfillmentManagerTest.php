<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Fulfillment\FulfillmentManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class FulfillmentManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Fulfillment';
    }

    public function getServiceClass()
    {
        return FulfillmentManager::class;
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }
}