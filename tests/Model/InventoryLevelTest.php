<?php

namespace Slince\Shopify\Tests\Model;

use Slince\Shopify\Model\InventoryLevel;


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