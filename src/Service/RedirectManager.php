<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Redirect;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class RedirectManager extends GeneralCurdable
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