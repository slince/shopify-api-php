<?php

namespace Slince\Shopify\Tests\Model\Customers;

use Slince\Shopify\Model\Customers\CustomerSavedSearch;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CustomerSavedSearchTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CustomerSavedSearch::class;
    }
}