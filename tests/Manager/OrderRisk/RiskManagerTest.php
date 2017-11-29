<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\OrderRisk\RiskManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class RiskManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Risk';
    }

    public function getServiceClass()
    {
        return RiskManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}