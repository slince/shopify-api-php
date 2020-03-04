<?php

namespace Slince\Shopify\Tests\Theme;

use Slince\Shopify\Manager\Theme\ThemeManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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