<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Page;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class PageManager extends GeneralCurdable implements PageManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Page::class;
    }
}