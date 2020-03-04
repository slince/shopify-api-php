<?php

namespace Slince\Shopify\Tests\ShippingZone;

use Slince\Shopify\Manager\ShippingZone\ShippingZone;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ShippingZoneTest extends ModelTestCase
{
    public function getModelClass()
    {
        return ShippingZone::class;
    }
}