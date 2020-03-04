<?php

namespace Slince\Shopify\Tests\Collect;

use Slince\Shopify\Manager\Collect\Collect;
use Slince\Shopify\Tests\Base\ModelTestCase;

class CollectTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Collect::class;
    }
}