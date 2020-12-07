<?php

namespace Slince\Shopify\Tests\Model\Inventory;

use Slince\Shopify\Model\Inventory\InventoryItem;
use Slince\Shopify\Tests\Model\ModelTestCase;

class InventoryItemTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return InventoryItem::class;
    }
}