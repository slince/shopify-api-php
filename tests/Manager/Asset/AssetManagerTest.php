<?php

namespace Slince\Shopify\Tests\Asset;

use Slince\Shopify\Manager\Asset\AssetManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class AssetManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Asset';
    }

    public function getServiceClass()
    {
        return AssetManager::class;
    }

    public function getService($fixture)
    {
        $class = $this->getServiceClass();

        return new $class($this->getClientMock($fixture));
    }

    public function testUpdate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $entity = $service->update(12, reset($json));
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testCreate()
    {
        $this->markTestSkipped();
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}