<?php

namespace Slince\Shopify\Tests\Article;

use Slince\Shopify\Manager\Comment\Comment;
use Slince\Shopify\Tests\Base\ModelTestCase;

class CommentTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Comment::class;
    }
}