<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\PriceRuleManager;


class PriceRuleManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'PriceRule';
    }

    public function getServiceClass()
    {
        return PriceRuleManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}