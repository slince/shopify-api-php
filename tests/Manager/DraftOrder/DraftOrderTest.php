<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\DraftOrder\DraftOrder;
use Slince\Shopify\Tests\Base\ModelTestCase;

class DraftOrderTest extends ModelTestCase
{
    public function getModelClass()
    {
        return DraftOrder::class;
    }
}