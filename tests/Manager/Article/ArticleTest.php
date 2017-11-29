<?php

namespace Slince\Shopify\Tests\Article;

use Slince\Shopify\Manager\Article\Article;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ArticleTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Article::class;
    }
}