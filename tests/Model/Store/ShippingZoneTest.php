<?php

namespace Slince\Shopify\Tests\Model\Store;

use Slince\Shopify\Model\Store\ShippingZone;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ShippingZoneTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ShippingZone::class;
    }
}