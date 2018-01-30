<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Asset;

use Slince\Shopify\Common\Manager\NestCrudable;

class AssetManager extends NestCrudable implements AssetManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'assets';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'theme';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Asset::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count($themeId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}