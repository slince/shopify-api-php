<?php

namespace Slince\Shopify\Tests\Model\Store;

use Slince\Shopify\Model\Store\Shop;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ShopTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Shop::class;
    }
}