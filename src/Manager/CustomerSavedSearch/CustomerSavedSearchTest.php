<?php

namespace Slince\Shopify\Tests\Customer;

use Slince\Shopify\Manager\CustomerSavedSearch\CustomerSavedSearch;
use Slince\Shopify\Tests\Base\ModelTestCase;

class CustomerSavedSearchTest extends ModelTestCase
{
    public function getModelClass()
    {
        return CustomerSavedSearch::class;
    }
}