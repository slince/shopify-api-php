<?php

namespace Slince\Shopify\Tests\Country;

use Slince\Shopify\Manager\Country\CountryManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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