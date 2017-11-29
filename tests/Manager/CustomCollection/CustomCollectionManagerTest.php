<?php

namespace Slince\Shopify\Tests\Collect;

use Slince\Shopify\Manager\CustomCollection\CustomCollectionManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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