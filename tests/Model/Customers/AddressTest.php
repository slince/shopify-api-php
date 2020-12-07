<?php

namespace Slince\Shopify\Tests\Model\Customers;

use Slince\Shopify\Model\Customers\Address;
use Slince\Shopify\Tests\Model\ModelTestCase;

class AddressTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Address::class;
    }
}