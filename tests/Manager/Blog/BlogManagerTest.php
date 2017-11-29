<?php

namespace Slince\Shopify\Tests\Blog;

use Slince\Shopify\Manager\Blog\BlogManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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