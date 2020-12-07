<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\CustomCollection;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CustomCollectionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CustomCollection::class;
    }
}