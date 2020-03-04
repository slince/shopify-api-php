<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Refund\Refund;
use Slince\Shopify\Manager\Refund\RefundManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class RefundManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Refund';
    }

    public function getServiceClass()
    {
        return RefundManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }

    public function testUpdate()
    {
        $this->markTestSkipped();
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }

    public function testCalculate()
    {
        $service = $this->getService('Refund/view.json');
        $refund = $service->calculate(100, [
            'shipping' => [
                'full_refund' => true,
            ],
            'refund_line_items' => [
                [
                    'line_item_id' => 518995019,
                    'quantity' => 1,
                ],
            ],
        ]);
        $this->assertInstanceOf(Refund::class, $refund);
    }
}