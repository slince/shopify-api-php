<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\SmartCollection;
use Slince\Shopify\Tests\Model\ModelTestCase;

class SmartCollectionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return SmartCollection::class;
    }
}