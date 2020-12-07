<?php

namespace Slince\Shopify\Tests\Model\Shipping;

use Slince\Shopify\Model\Shipping\FulfillmentEvent;
use Slince\Shopify\Tests\Model\ModelTestCase;

class FulfillmentEventTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return FulfillmentEvent::class;
    }
}