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

namespace Slince\Shopify\Service\Orders;

use Slince\Shopify\Model\Orders\Transaction;

interface TransactionManagerInterface
{
    /**
     * Finds transactions.
     *
     * @param int   $orderId
     * @param array $query
     *
     * @return Transaction[]
     */
    public function findAll($orderId, array $query = []);

    /**
     * Finds an transaction.
     *
     * @param int $orderId
     * @param int $id
     *
     * @return Transaction
     */
    public function find($orderId, $id);

    /**
     * Gets the number of transactions.
     *
     * @param int   $orderId
     * @param array $query
     *
     * @return int
     */
    public function count($orderId, array $query = []);

    /**
     * Creates a transaction.
     *
     * @param int   $orderId
     * @param array $data
     *
     * @return Transaction
     */
    public function create($orderId, array $data);
}
