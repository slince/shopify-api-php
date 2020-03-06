<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\PageManager;


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