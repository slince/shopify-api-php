<?php

namespace Slince\Shopify\Tests\InventoryItem;

use Slince\Shopify\Manager\InventoryItem\InventoryItem;
use Slince\Shopify\Tests\Base\ModelTestCase;

class InventoryItemTest extends ModelTestCase
{
    public function getModelClass()
    {
        return InventoryItem::class;
    }
}