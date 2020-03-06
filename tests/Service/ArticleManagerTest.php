<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\ArticleManager;


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