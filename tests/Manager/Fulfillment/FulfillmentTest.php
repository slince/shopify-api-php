<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Fulfillment\Fulfillment;
use Slince\Shopify\Tests\Base\ModelTestCase;

class FulfillmentTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Fulfillment::class;
    }
}