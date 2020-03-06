<?php

namespace Slince\Shopify\Tests\Product;

use Slince\Shopify\Manager\Product\Product;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ProductTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Product::class;
    }
}