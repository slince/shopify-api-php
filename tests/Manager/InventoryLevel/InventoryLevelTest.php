<?php

namespace Slince\Shopify\Tests\InventoryLevel;

use Slince\Shopify\Manager\InventoryLevel\InventoryLevel;
use Slince\Shopify\Tests\Base\ModelTestCase;

class InventoryLevelTest extends ModelTestCase
{
    public function getModelClass()
    {
        return InventoryLevel::class;
    }

    public function testId()
    {
        $this->markTestSkipped();
    }
}