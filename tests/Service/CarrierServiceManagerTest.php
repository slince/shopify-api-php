<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\CarrierServiceManager;


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