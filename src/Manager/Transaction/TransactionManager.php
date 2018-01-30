<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Transaction;

use Slince\Shopify\Common\Manager\NestCrudable;

class TransactionManager extends NestCrudable implements TransactionManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Transaction::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'transaction';
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
    public function remove($orderId, $id)
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
}