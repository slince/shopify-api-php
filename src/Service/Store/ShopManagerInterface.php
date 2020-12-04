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

namespace Slince\Shopify\Service\Store;

use Slince\Shopify\Model\Store\Shop;

interface ShopManagerInterface
{
    /**
     * Gets the shop.
     *
     * @return Shop
     */
    public function get();
}
