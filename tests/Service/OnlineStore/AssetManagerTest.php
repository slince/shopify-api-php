<?php

namespace Slince\Shopify\Tests\Service\OnlineStore;

use Slince\Shopify\Tests\Service\Common\GeneralCurdManagerTestCase;

class AssetManagerTest extends GeneralCurdManagerTestCase
{
    public function testFindAll()
    {
        $fixture = $this->getFixturesDir().'/all.json';
        $service = $this->getService($fixture);
        $entities = $service->findAll(1, []);
        $this->assertInstanceOf($service->getModelClass(), $entities[0]);
    }

    public function testCreate()
    {
        $this->markTestSkipped('Yet not support.');
    }

    public function testCount()
    {
        $this->markTestSkipped('Yet not support.');
    }

    public function testRemove()
    {
        $this->markTestSkipped('Yet not support.');
    }
}