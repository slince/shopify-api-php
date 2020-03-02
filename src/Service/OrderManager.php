<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Order;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class OrderManager extends GeneralCurdable implements OrderManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Order::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function open($id)
    {
        $data = $this->client->post('orders/'.$id.'/open', []);

        return $this->fromArray($data['order']);
    }

    /**
     * {@inheritdoc}
     */
    public function close($id)
    {
        $data = $this->client->post('orders/'.$id.'/close', []);

        return $this->fromArray($data['order']);
    }

    /**
     * {@inheritdoc}
     */
    public function cancel($id)
    {
        $data = $this->client->post('orders/'.$id.'/cancel', []);

        return $this->fromArray($data['order']);
    }
}