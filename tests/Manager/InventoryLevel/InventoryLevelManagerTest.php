<?php

namespace Slince\Shopify\Tests\InventoryLevel;

use Slince\Shopify\Manager\InventoryLevel\InventoryLevelManager;
use Slince\Shopify\Tests\TestCase;

class InventoryLevelManagerTest extends TestCase
{
    public function getFixturesDir()
    {
        return 'InventoryLevel';
    }

    public function getServiceClass()
    {
        return InventoryLevelManager::class;
    }

    public function getService($fixture)
    {
        $class = $this->getServiceClass();

        return new $class($this->getClientMock($fixture));
    }

    public function testFindAll()
    {
        $fixture = $this->getFixturesDir().'/'.'all.json';
        $service = $this->getService($fixture);
        $entities = $service->findAll([]);
        $this->assertInstanceOf($service->getModelClass(), $entities[0]);

        $rawArray = $this->readFixture($fixture);
    }

    public function testAdjust()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $entity = $service->adjust([]);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testRemove()
    {
        $fixture = $this->getFixturesDir().'/'.'delete.json';
        $service = $this->getService($fixture);
        $service->remove(123, 456);
    }

    public function testConnect()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $entity = $service->connect([]);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testSet()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $entity = $service->set([]);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }
}