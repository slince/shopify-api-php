<?php

namespace Slince\Shopify\Tests\Model\Customers;

use Slince\Shopify\Model\Customers\Customer;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CustomerTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Customer::class;
    }
}