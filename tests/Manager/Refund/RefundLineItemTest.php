<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Refund\RefundLineItem;
use Slince\Shopify\Tests\Base\ModelTestCase;

class RefundLineItemTest extends ModelTestCase
{
    public function getModelClass()
    {
        return RefundLineItem::class;
    }
}