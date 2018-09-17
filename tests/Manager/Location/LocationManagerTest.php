<?php

namespace Slince\Shopify\Tests\Location;

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
}