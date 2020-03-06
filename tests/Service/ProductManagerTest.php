<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\ProductManager;


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