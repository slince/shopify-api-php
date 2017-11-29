<?php

namespace Slince\Shopify\Tests\Address;

use Slince\Shopify\Manager\CustomerAddress\Address;
use Slince\Shopify\Tests\Base\ModelTestCase;

class AddressTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Address::class;
    }
}