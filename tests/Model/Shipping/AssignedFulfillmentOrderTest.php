<?php

namespace Slince\Shopify\Tests\Model\Shipping;

use Slince\Shopify\Model\Shipping\AssignedFulfillmentOrder;
use Slince\Shopify\Tests\Model\ModelTestCase;

class AssignedFulfillmentOrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AssignedFulfillmentOrder::class;
    }
}