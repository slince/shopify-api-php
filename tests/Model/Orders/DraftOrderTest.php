<?php

namespace Slince\Shopify\Tests\Model\Orders;

use Slince\Shopify\Model\Orders\DraftOrder;
use Slince\Shopify\Tests\Model\ModelTestCase;

class DraftOrderTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DraftOrder::class;
    }
}