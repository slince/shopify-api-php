<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service;

use Slince\Shopify\Model\Blog;
use Slince\Shopify\Service\Contracts\BlogManagerInterface;

class BlogManager extends GeneralCurdable implements BlogManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'blogs';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Blog::class;
    }
}
