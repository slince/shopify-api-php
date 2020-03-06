<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\FulfillmentServiceManager;


class FulfillmentServiceManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'FulfillmentService';
    }

    public function getServiceClass()
    {
        return FulfillmentServiceManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}