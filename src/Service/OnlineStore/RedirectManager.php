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

use Slince\Shopify\Model\OnlineStore\Redirect;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class RedirectManager extends GeneralCurdManager implements RedirectManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'redirects';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'redirect';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Redirect::class;
    }
}
