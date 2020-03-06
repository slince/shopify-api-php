<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\ThemeManager;


class ThemeManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Theme';
    }

    public function getServiceClass()
    {
        return ThemeManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }
}