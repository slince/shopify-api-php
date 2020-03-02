<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ProductImage;

use Slince\Shopify\Common\Manager\NestCrudable;

class ImageManager extends NestCrudable implements ImageManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'product_images';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Image::class;
    }
}