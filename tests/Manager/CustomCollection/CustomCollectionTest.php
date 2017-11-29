<?php

namespace Slince\Shopify\Tests\Collect;

use Slince\Shopify\Manager\CustomCollection\CustomCollection;
use Slince\Shopify\Tests\Base\ModelTestCase;

class CustomCollectionTest extends ModelTestCase
{
    public function getModelClass()
    {
        return CustomCollection::class;
    }
}