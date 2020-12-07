<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\OrderAddress;
use Slince\Shopify\Tests\Model\ModelTestCase;

class OrderAddressTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return OrderAddress::class;
    }
}