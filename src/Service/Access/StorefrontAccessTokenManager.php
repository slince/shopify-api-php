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

namespace Slince\Shopify\Service\Access;

use Slince\Shopify\Model\Access\StorefrontAccessToken;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class StorefrontAccessTokenManager extends GeneralCurdManager implements StorefrontAccessTokenManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return StorefrontAccessToken::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'storefront_access_token';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'storefront_access_tokens';
    }
}
