<?php

namespace Slince\Shopify\Tests\Country;

use Slince\Shopify\Manager\Country\Country;
use Slince\Shopify\Tests\Base\ModelTestCase;

class CountryTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Country::class;
    }
}