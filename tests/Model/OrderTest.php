<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Order\Order;
use Slince\Shopify\Tests\Base\ModelTestCase;

class OrderTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Order::class;
    }
}