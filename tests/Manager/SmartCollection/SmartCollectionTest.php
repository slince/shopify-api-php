<?php

namespace Slince\Shopify\Tests\SmartCollection;

use Slince\Shopify\Manager\SmartCollection\SmartCollection;
use Slince\Shopify\Tests\Base\ModelTestCase;

class SmartCollectionTest extends ModelTestCase
{
    public function getModelClass()
    {
        return SmartCollection::class;
    }
}