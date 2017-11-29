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

    public function testCount()
    {
        $this->markTestSkipped();
    }
}