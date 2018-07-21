<?php

namespace Slince\Shopify\Tests\Asset;

use Slince\Shopify\Manager\Asset\AssetManager;
use Slince\Shopify\Tests\TestCase;

class AssetManagerTest extends TestCase
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

    public function testFindAll()
    {
        $fixture = $this->getFixturesDir().'/'.'all.json';
        $service = $this->getService($fixture);
        $assets = $service->findAll(1);
        $this->assertInstanceOf($service->getModelClass(), $assets[0]);
    }

    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $asset = $service->find(1, 'layouts/theme.liquid');
        $this->assertInstanceOf($service->getModelClass(), $asset);
    }

    public function testUpdate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = json_decode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $json = reset($json);
        $asset = $service->update(1, $json);
        $this->assertInstanceOf($service->getModelClass(), $asset);
    }
}