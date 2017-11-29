<?php

namespace Slince\Shopify\Tests\FulfillmentService;

use Slince\Shopify\Manager\FulfillmentService\FulfillmentServiceManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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