<?php

namespace Slince\Shopify\Tests\Collect;

use Slince\Shopify\Manager\Collect\CollectManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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