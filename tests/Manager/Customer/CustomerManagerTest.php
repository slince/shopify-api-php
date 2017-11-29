<?php

namespace Slince\Shopify\Tests\Customer;

use Slince\Shopify\Manager\Customer\CustomerManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class CustomerManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Customer';
    }

    public function getServiceClass()
    {
        return CustomerManager::class;
    }
}