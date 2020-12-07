<?php

namespace Slince\Shopify\Tests\Model\Shipping;

use Slince\Shopify\Model\Shipping\FulfillmentService;
use Slince\Shopify\Tests\Model\ModelTestCase;

class FulfillmentServiceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return FulfillmentService::class;
    }
}