<?php

namespace Slince\Shopify\Tests\Customer;

use Slince\Shopify\Manager\CustomerAddress\AddressManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class AddressManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Address';
    }

    public function getServiceClass()
    {
        return AddressManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}