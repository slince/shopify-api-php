<?php

namespace Slince\Shopify\Tests\Model\Shipping;

use Slince\Shopify\Model\Shipping\CarrierService;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CarrierServiceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CarrierService::class;
    }
}