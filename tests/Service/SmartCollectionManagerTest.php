<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\SmartCollectionManager;


class SmartCollectionManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'SmartCollection';
    }

    public function getServiceClass()
    {
        return SmartCollectionManager::class;
    }
}