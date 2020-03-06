<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\ImageManager;


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