<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\AppliedDiscount;
use Slince\Shopify\Tests\Model\ModelTestCase;

class AppliedDiscountTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AppliedDiscount::class;
    }
}