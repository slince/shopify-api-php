<?php

namespace Slince\Shopify\Tests\Model\Orders;

use Slince\Shopify\Model\Orders\Refund;
use Slince\Shopify\Tests\Model\ModelTestCase;

class RefundTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Refund::class;
    }
}