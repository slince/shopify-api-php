<?php

namespace Slince\Shopify\Tests\Service\Common;

use GuzzleHttp\Utils;
use Slince\Shopify\Service\Common\GeneralCurdManager;
use Slince\Shopify\Tests\TestCase;

abstract class GeneralCurdManagerTestCase extends TestCase
{
    protected function getServiceClass()
    {
        return str_ireplace(['Tests', 'Test'], ['', ''], get_called_class());
    }

    protected function getFixturesDir()
    {
        return str_ireplace(['Slince\Shopify\Tests\Service'], [''], $this->getServiceClass());
    }

    /**
     * @param string $fixture
     *
     * @return GeneralCurdManager
     */
    public function getService($fixture)
    {
        $class = $this->getServiceClass();

        return new $class($this->getClientMock($fixture));
    }

    public function testFindAll()
    {
        $fixture = $this->getFixturesDir().'/all.json';
        $service = $this->getService($fixture);
        $entities = $service->findAll([]);
        $this->assertInstanceOf($service->getModelClass(), $entities[0]);

        $rawArray = $this->readFixture($fixture);
    }

    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/view.json';
        $service = $this->getService($fixture);
        $entity = $service->find(1);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testCreate()
    {
        $fixture = $this->getFixturesDir().'/view.json';
        $service = $this->getService($fixture);
        $json = Utils::jsonDecode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $json = reset($json);
        $entity = $service->create($json);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testUpdate()
    {
        $fixture = $this->getFixturesDir().'/view.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $entity = $service->update(12, reset($json));
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testCount()
    {
        $fixture = $this->getFixturesDir().'/count.json';
        $service = $this->getService($fixture);
        $count = $service->count([]);
        $json = Utils::jsonDecode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $this->assertEquals($json['count'], $count);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testRemove()
    {
        $fixture = $this->getFixturesDir().'/delete.json';
        $service = $this->getService($fixture);
        $service->remove(123);
    }
}