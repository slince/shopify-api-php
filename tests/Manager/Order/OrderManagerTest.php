<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Order\OrderManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class OrderManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Order';
    }

    public function getServiceClass()
    {
        return OrderManager::class;
    }
}