<?php

namespace Slince\Shopify\Tests\Model\Store;

use Slince\Shopify\Model\Store\Province;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ProvinceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Province::class;
    }
}