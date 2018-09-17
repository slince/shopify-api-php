<?php

namespace Slince\Shopify\Tests\Product;

use Slince\Shopify\Manager\ProductImage\ImageManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class ImageManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'ProductImage';
    }

    public function getServiceClass()
    {
        return ImageManager::class;
    }
}