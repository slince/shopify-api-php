<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\FulfillmentManager;


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