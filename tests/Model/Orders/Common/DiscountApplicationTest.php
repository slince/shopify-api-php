<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\DiscountApplication;
use Slince\Shopify\Tests\Model\ModelTestCase;

class DiscountApplicationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DiscountApplication::class;
    }
}