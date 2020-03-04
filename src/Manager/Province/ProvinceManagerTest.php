<?php

namespace Slince\Shopify\Tests\Country;

use Slince\Shopify\Manager\Province\ProvinceManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class ProvinceManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Province';
    }

    public function getServiceClass()
    {
        return ProvinceManager::class;
    }

    public function testCreate()
    {
        $this->markTestSkipped();
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }
}