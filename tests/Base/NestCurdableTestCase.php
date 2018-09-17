<?php

namespace Slince\Shopify\Tests\Base;

use Slince\Shopify\Common\Manager\NestCrudable;
use Slince\Shopify\Tests\TestCase;

abstract class NestCurdableTestCase extends TestCase
{
    abstract protected function getServiceClass();

    abstract protected function getFixturesDir();

    /**
     * @param string $fixture
     *
     * @return NestCrudable
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
        $articles = $service->findAll(1);
        $this->assertInstanceOf($service->getModelClass(), $articles[0]);
    }

    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $article = $service->find(1, 2);
        $this->assertInstanceOf($service->getModelClass(), $article);
    }

    public function testCreate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = json_decode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $json = reset($json);
        $article = $service->create(1, $json);
        $this->assertInstanceOf($service->getModelClass(), $article);
    }

    public function testUpdate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $entity = $service->update(1, 2, reset($json));
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testCount()
    {
        $fixture = $this->getFixturesDir().'/'.'count.json';
        $service = $this->getService($fixture);
        $count = $service->count(1);
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
        $service->remove(1, 2);
    }
}