<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\AddressManager;


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