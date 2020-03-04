<?php

namespace Slince\Shopify\Tests\DiscountCode;

use Slince\Shopify\Manager\DiscountCode\DiscountCode;
use Slince\Shopify\Tests\Base\ModelTestCase;

class DiscountCodeTest extends ModelTestCase
{
    public function getModelClass()
    {
        return DiscountCode::class;
    }
}