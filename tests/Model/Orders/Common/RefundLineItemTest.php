<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\RefundLineItem;
use Slince\Shopify\Tests\Model\ModelTestCase;

class RefundLineItemTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return RefundLineItem::class;
    }
}