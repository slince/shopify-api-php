<?php

namespace Slince\Shopify\Tests\Model\Shipping;

use Slince\Shopify\Model\Shipping\FulfillmentOrder;
use Slince\Shopify\Tests\Model\ModelTestCase;

class FulfillmentOrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return FulfillmentOrder::class;
    }
}