<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\InventoryItemManager;


class InventoryItemManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'InventoryItem';
    }

    public function getServiceClass()
    {
        return InventoryItemManager::class;
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }

    public function testCreate()
    {
        $this->markTestSkipped();
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}