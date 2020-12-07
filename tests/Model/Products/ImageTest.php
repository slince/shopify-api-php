<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\Image;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ImageTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Image::class;
    }
}