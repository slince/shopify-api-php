<?php

namespace Slince\Shopify\Tests\Product;

use Slince\Shopify\Manager\ProductVariant\VariantManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class VariantManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'ProductVariant';
    }

    public function getServiceClass()
    {
        return VariantManager::class;
    }

    public function testFind()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $variant = $service->find(1);
        $this->assertInstanceOf($service->getModelClass(), $variant);
    }

    public function testUpdate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $entity = $service->update(12, reset($json));
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }
}