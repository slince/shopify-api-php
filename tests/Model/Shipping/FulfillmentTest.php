<?php

namespace Slince\Shopify\Tests\Model\Shipping;

use Slince\Shopify\Model\Shipping\Fulfillment;
use Slince\Shopify\Tests\Model\ModelTestCase;

class FulfillmentTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Fulfillment::class;
    }
}