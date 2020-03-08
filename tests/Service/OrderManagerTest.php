<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Model\Customer;
use Slince\Shopify\Model\Order;
use Slince\Shopify\Service\OrderManager;

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