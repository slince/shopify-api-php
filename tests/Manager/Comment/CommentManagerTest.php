<?php

namespace Slince\Shopify\Tests\Comment;

use Slince\Shopify\Manager\Comment\CommentManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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