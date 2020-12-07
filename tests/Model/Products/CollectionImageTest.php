<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\CollectionImage;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CollectionImageTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CollectionImage::class;
    }
}