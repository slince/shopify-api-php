<?php

namespace Slince\Shopify\Tests\Model\Orders;

use Slince\Shopify\Model\Orders\Checkout;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CheckoutTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Checkout::class;
    }
}