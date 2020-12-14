<?php

namespace Slince\Shopify\Tests\Service\Inventory;

use Slince\Shopify\Tests\Service\Common\NestCurdManagerTestCase;

class InventoryLevelManagerTest extends NestCurdManagerTestCase
{
    public function testCount()
    {
        $this->markTestSkipped('Yet not support.');
    }

    public function testFind()
    {
        $this->markTestSkipped('Yet not support.');
    }

    public function testCreate()
    {
        $this->markTestSkipped('Yet not support.');
    }

    public function testUpdate()
    {
        $this->markTestSkipped('Yet not support.');
    }

    public function testFindAll()
    {
        $fixture = $this->getFixturesDir().'/'.'all.json';
        $service = $this->getService($fixture);
        $articles = $service->findAll([]);
        $this->assertInstanceOf($service->getModelClass(), $articles[0]);
    }

}