<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\DraftOrder;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface DraftOrderManagerInterface extends ManagerInterface
{
    /**
     * Gets all orders.
     *
     * @param array $query
     *
     * @return DraftOrder[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the blog by its id.
     *
     * @param int $id
     *
     * @return DraftOrder
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
     * @param int $id
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
     * @return DraftOrder
     */
    public function create(array $data);

    /**
     * Send invoices to customers.
     *
     * @param int $id
     * @param array $data
     * @return array
     */
    public function sendInvoice($id, array $data);

    /**
     * Complete a draft order
     *
     * @param int $id
     * @param boolean $paymentPending
     * @return DraftOrder
     */
    public function complete($id, $paymentPending = null);
}