<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\BlogManager;


class BlogManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Blog';
    }

    public function getServiceClass()
    {
        return BlogManager::class;
    }
}