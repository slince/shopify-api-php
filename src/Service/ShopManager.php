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

use Slince\Shopify\Model\Shop;
use Slince\Shopify\Service\Contracts\ShopManagerInterface;

class ShopManager extends AbstractManager implements ShopManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'shops';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Shop::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'shop';
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        $data = $this->client->get('shop');

        return $this->fromArray($data['shop']);
    }
}
