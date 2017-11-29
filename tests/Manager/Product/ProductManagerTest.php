<?php

namespace Slince\Shopify\Tests\Product;

use Slince\Shopify\Manager\Product\ProductManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class ProductManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Product';
    }

    public function getServiceClass()
    {
        return ProductManager::class;
    }
}