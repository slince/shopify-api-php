<?php

namespace Slince\Shopify\Tests\Customer;

use Slince\Shopify\Manager\Customer\Customer;
use Slince\Shopify\Tests\Base\ModelTestCase;

class CustomerTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Customer::class;
    }
}