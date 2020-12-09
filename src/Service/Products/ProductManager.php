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

namespace Slince\Shopify\Service\Products;

use Slince\Shopify\Model\Products\Product;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class ProductManager extends GeneralCurdManager implements ProductManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Product::class;
    }
}
