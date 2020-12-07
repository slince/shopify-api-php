<?php

namespace Slince\Shopify\Tests\Model\OnlineStore;

use Slince\Shopify\Model\OnlineStore\Article;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ArticleTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Article::class;
    }
}