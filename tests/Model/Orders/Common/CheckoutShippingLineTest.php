<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\CheckoutShippingLine;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CheckoutShippingLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CheckoutShippingLine::class;
    }
}