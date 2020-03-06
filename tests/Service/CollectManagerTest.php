<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\CollectManager;


class CollectManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Collect';
    }

    public function getServiceClass()
    {
        return CollectManager::class;
    }

    public function testUpdate()
    {
        $this->markTestSkipped();
    }
}