<?php

namespace Slince\Shopify\Tests\Model\Discounts;

use Slince\Shopify\Model\Discounts\DiscountCode;
use Slince\Shopify\Tests\Model\ModelTestCase;

class DiscountCodeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DiscountCode::class;
    }
}