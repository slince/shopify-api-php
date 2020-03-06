<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\CustomCollectionManager;


class CustomCollectionManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'CustomCollection';
    }

    public function getServiceClass()
    {
        return CustomCollectionManager::class;
    }
}