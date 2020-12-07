<?php

namespace Slince\Shopify\Tests\Model\Shipping\Common;

use Slince\Shopify\Model\Shipping\Common\LineItem;
use Slince\Shopify\Tests\Model\ModelTestCase;

class LineItemTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItem::class;
    }
}