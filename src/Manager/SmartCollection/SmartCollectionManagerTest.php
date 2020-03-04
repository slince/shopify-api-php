<?php

namespace Slince\Shopify\Tests\Collect;

use Slince\Shopify\Manager\SmartCollection\SmartCollectionManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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