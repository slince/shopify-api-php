<?php

namespace Slince\Shopify\Tests\Model\OnlineStore;

use Slince\Shopify\Model\OnlineStore\Blog;
use Slince\Shopify\Tests\Model\ModelTestCase;

class BlogTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Blog::class;
    }
}