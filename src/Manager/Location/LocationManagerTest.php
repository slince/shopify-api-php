<?php

namespace Slince\Shopify\Tests\Location;

use Slince\Shopify\Manager\InventoryLevel\InventoryLevel;
use Slince\Shopify\Manager\Location\LocationManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class LocationManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Location';
    }

    public function getServiceClass()
    {
        return LocationManager::class;
    }

    public function testCreate()
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

    public function testGetInventoryLevels()
    {
        $fixture = $this->getFixturesDir().'/inventory_levels.json';
        $service = $this->getService($fixture);
        $inventoryLevels = $service->getInventoryLevels(1);
        $this->assertInstanceOf(InventoryLevel::class, $inventoryLevels[0]);
    }
}