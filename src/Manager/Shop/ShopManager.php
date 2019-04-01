<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Shop;

use Slince\Shopify\Common\Manager\AbstractManager;

class ShopManager extends AbstractManager implements ShopManagerInterface
{
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
    public static function getServiceName()
    {
        return 'shops';
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