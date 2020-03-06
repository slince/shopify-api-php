<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\CountryManager;


class CountryManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Country';
    }

    public function getServiceClass()
    {
        return CountryManager::class;
    }
}