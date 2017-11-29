<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Order\ShippingLine;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ShippingLineTest extends ModelTestCase
{
    public function getModelClass()
    {
        return ShippingLine::class;
    }
}