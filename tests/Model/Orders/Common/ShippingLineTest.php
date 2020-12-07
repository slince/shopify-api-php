<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\ShippingLine;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ShippingLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ShippingLine::class;
    }
}