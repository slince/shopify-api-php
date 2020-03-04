<?php

namespace Slince\Shopify\Tests\Base;

use Slince\Shopify\Common\Manager\GeneralCurdable;
use Slince\Shopify\Tests\TestCase;

abstract class GeneralCurdableTestCase extends TestCase
{
    abstract protected function getServiceClass();

    abstract protected function getFixturesDir();

    /**
     * @param string $fixture
     *
     * @return GeneralCurdable
     */
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

    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $entity = $service->find(1);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testCreate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = json_decode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $json = reset($json);
        $entity = $service->create($json);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testUpdate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $entity = $service->update(12, reset($json));
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testCount()
    {
        $fixture = $this->getFixturesDir().'/'.'count.json';
        $service = $this->getService($fixture);
        $count = $service->count([]);
        $json = json_decode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $this->assertEquals($json['count'], $count);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testRemove()
    {
        $fixture = $this->getFixturesDir().'/'.'delete.json';
        $service = $this->getService($fixture);
        $service->remove(123);
    }
}