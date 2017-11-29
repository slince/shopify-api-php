<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Refund\Refund;
use Slince\Shopify\Tests\Base\ModelTestCase;

class RefundTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Refund::class;
    }
}