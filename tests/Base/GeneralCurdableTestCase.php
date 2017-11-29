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
        $articles = $service->findAll([]);
        $this->assertInstanceOf($service->getModelClass(), $articles[0]);
    }

    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $article = $service->find(1);
        $this->assertInstanceOf($service->getModelClass(), $article);
    }

    public function testCreate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = json_decode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $json = reset($json);
        $article = $service->create($json);
        $this->assertInstanceOf($service->getModelClass(), $article);
    }

    public function testCount()
    {
        $fixture = $this->getFixturesDir().'/'.'count.json';
        $service = $this->getService($fixture);
        $count = $service->count([]);
        $json = json_decode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $this->assertEquals($json['count'], $count);
    }
}