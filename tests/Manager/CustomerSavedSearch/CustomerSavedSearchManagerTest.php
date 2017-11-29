<?php

namespace Slince\Shopify\Tests\Customer;

use Slince\Shopify\Manager\CustomerSavedSearch\CustomerSavedSearchManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class CustomerSavedSearchManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'CustomerSavedSearch';
    }

    public function getServiceClass()
    {
        return CustomerSavedSearchManager::class;
    }
}