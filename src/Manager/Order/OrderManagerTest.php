<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Customer\Customer;
use Slince\Shopify\Manager\Order\Order;
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

    public function testCustomer()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $order = $service->find(1);
        $this->assertInstanceOf(Order::class, $order);
        $this->assertInstanceOf(Customer::class, $order->getCustomer());
    }
}