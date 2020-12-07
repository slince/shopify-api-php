<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\Collect;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CollectTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Collect::class;
    }
}