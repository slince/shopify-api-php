<?php

namespace Slince\Shopify\Tests\Product;

use Slince\Shopify\Manager\ProductImage\Image;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ImageTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Image::class;
    }
}