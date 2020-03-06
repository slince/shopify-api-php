<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\CustomerSavedSearchManager;


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