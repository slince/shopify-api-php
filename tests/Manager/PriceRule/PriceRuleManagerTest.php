<?php

namespace Slince\Shopify\Tests\PriceRule;

use Slince\Shopify\Manager\PriceRule\PriceRuleManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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