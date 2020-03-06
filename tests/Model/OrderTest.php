<?php

namespace Slince\Shopify\Tests\Model;

use Slince\Shopify\Model\Order;


class OrderTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Order::class;
    }
}