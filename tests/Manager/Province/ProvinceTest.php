<?php

namespace Slince\Shopify\Tests\Country;

use Slince\Shopify\Manager\Province\Province;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ProvinceTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Province::class;
    }
}