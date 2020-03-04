<?php

namespace Slince\Shopify\Tests\Shop;

use Slince\Shopify\Manager\Shop\Shop;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ShopTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Shop::class;
    }
}