<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\ProvinceManager;


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