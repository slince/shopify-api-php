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

namespace Slince\Shopify\Service\Customers;

use Slince\Shopify\Model\Customers\Customer;
use Slince\Shopify\Model\Orders\Order;

interface CustomerManagerInterface
{
    /**
     * Gets all customers.
     *
     * @param array $query
     *
     * @return Customer[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the customer by its id.
     *
     * @param int $id
     *
     * @return Customer
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
     * Updates the customer.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the customer.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a customer.
     *
     * @param array $data
     *
     * @return Customer
     */
    public function create(array $data);

    /**
     * Creates the account activation url for the customer.
     *
     * @param int $id
     *
     * @return string
     */
    public function createAccountActivationUrl($id);

    /**
     * @param $id
     * @param array $data
     *
     * @return mixed
     */
    public function sendInvite($id, array $data);

    /**
     * Searches for customers that match a supplied query.
     *
     * @param array $query
     *
     * @return Customer[]
     */
    public function search(array $query = []);

    /**
     * Retrieves all orders belonging to a customer.
     *
     * @param string $id
     *
     * @return Order[]
     */
    public function orders($id);
}
