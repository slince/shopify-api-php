<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\Product;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ProductTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Product::class;
    }
}