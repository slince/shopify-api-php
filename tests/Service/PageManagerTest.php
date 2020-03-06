<?php

namespace Slince\Shopify\Tests\Page;

use Slince\Shopify\Manager\Page\PageManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class PageManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Page';
    }

    public function getServiceClass()
    {
        return PageManager::class;
    }
}