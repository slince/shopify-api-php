<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\DiscountAllocation;
use Slince\Shopify\Tests\Model\ModelTestCase;

class DiscountAllocationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DiscountAllocation::class;
    }
}