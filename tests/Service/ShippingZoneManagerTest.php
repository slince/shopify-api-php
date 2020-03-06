<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\ShippingZoneManager;


class ShippingZoneManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'ShippingZone';
    }

    public function getServiceClass()
    {
        return ShippingZoneManager::class;
    }

    public function testFind()
    {
        $this->markTestSkipped();
    }

    public function testCreate()
    {
        $this->markTestSkipped();
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }

    public function testUpdate()
    {
        $this->markTestSkipped();
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }
}