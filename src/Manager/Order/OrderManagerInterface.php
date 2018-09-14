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

use Slince\Shopify\Common\Manager\ManagerInterface;

interface OrderManagerInterface extends ManagerInterface
{
    /**
     * Gets all orders.
     *
     * @param array $query
     *
     * @return Order[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the blog by its id.
     *
     * @param int $id
     *
     * @return Order
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @param array $query
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the order.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the order.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates an order.
     *
     * @param array $data
     *
     * @return Order
     */
    public function create(array $data);

    /**
     * Re-open a closed order.
     *
     * @param int $id
     *
     * @return Order
     */
    public function open($id);

    /**
     * Close an order.
     *
     * @param int $id
     *
     * @return Order
     */
    public function close($id);

    /**
     * Cancel an order.
     *
     * @param int $id
     *
     * @return Order
     */
    public function cancel($id);
}
