<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Refund;

use Slince\Shopify\Common\Manager\NestCrudable;

class RefundManager extends NestCrudable implements RefundManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'refunds';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Refund::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'refund';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function count($orderId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function update($orderId, $id, array $data)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function remove($orderId, $id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function calculate($orderId, array $data)
    {
        $resource = "/orders/{$orderId}/refunds/calculate";
        $json = $this->client->post($resource, ['refund' => $data])['refund'];

        return $this->fromArray($json);
    }
}