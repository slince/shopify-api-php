<?php

namespace Slince\Shopify\Tests\InventoryItem;

use Slince\Shopify\Manager\InventoryItem\InventoryItemManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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