<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\DiscountCode;
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