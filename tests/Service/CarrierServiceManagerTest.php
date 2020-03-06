<?php

namespace Slince\Shopify\Tests\CarrierService;

use Slince\Shopify\Manager\CarrierService\CarrierServiceManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class CarrierServiceManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'CarrierService';
    }

    public function getServiceClass()
    {
        return CarrierServiceManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}