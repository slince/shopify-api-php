<?php

namespace Slince\Shopify\Tests\Blog;

use Slince\Shopify\Manager\Blog\Blog;
use Slince\Shopify\Tests\Base\ModelTestCase;

class BlogTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Blog::class;
    }
}