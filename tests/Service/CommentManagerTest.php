<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\CommentManager;


class CommentManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Comment';
    }

    public function getServiceClass()
    {
        return CommentManager::class;
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }
}