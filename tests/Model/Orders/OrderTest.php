<?php

namespace Slince\Shopify\Tests\Model\Orders;

use Slince\Shopify\Model\Orders\Order;
use Slince\Shopify\Tests\Model\ModelTestCase;

class OrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Order::class;
    }
}