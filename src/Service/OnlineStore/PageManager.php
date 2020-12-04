<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\OnlineStore;

use Slince\Shopify\Model\OnlineStore\Page;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class PageManager extends GeneralCurdManager implements PageManagerInterface
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
