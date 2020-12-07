<?php

namespace Slince\Shopify\Tests\Model\Store;

use Slince\Shopify\Model\Store\Country;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CountryTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Country::class;
    }
}