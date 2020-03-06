<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\RiskManager;


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