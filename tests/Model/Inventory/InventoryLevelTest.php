<?php

namespace Slince\Shopify\Tests\Model\Inventory;

use Slince\Shopify\Model\Inventory\InventoryLevel;
use Slince\Shopify\Tests\Model\ModelTestCase;

class InventoryLevelTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return InventoryLevel::class;
    }
}