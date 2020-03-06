<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\DraftOrderManager;

class DraftOrderManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'DraftOrder';
    }

    public function getServiceClass()
    {
        return DraftOrderManager::class;
    }

    public function testSendInvoice()
    {
        $fixture = $this->getFixturesDir().'/send_invoice.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $result = $service->sendInvoice(12, $json['draft_order_invoice']);
        $this->assertEquals($result, $json['draft_order_invoice']);
    }

    public function testComplete()
    {
        $fixture = $this->getFixturesDir().'/view.json';
        $service = $this->getService($fixture);
        $result = $service->complete(12, true);
        $this->assertInstanceOf(DraftOrder::class, $result);
    }
}