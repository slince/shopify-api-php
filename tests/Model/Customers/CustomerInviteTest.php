<?php

namespace Slince\Shopify\Tests\Model\Customers;

use Slince\Shopify\Model\Customers\CustomerInvite;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CustomerInviteTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CustomerInvite::class;
    }
}