<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Order\LineItem;
use Slince\Shopify\Tests\Base\ModelTestCase;

class LineItemTest extends ModelTestCase
{
    public function getModelClass()
    {
        return LineItem::class;
    }
}