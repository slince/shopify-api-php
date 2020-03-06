<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\CustomerManager;


class CustomerManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Customer';
    }

    public function getServiceClass()
    {
        return CustomerManager::class;
    }

    public function testSearch()
    {
        $fixture = $this->getFixturesDir().'/'.'search.json';
        $service = $this->getService($fixture);
        $entities = $service->search([]);
        $this->assertInstanceOf($service->getModelClass(), $entities[0]);
    }
}