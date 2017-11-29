<?php

namespace Slince\Shopify\Tests\Article;

use Slince\Shopify\Manager\Article\ArticleManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class ArticleManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Article';
    }

    public function getServiceClass()
    {
        return ArticleManager::class;
    }
}