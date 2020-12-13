<?php

namespace Slince\Shopify\Tests\Service\Products;

use Slince\Shopify\Tests\Service\Common\GeneralCurdManagerTestCase;
use Slince\Shopify\Tests\Service\Common\NestCurdManagerTestCase;

class VariantManagerTest extends NestCurdManagerTestCase
{
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