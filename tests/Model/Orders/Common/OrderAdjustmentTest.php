<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\OrderAdjustment;
use Slince\Shopify\Tests\Model\ModelTestCase;

class OrderAdjustmentTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return OrderAdjustment::class;
    }
}