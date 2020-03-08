<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Contracts;

use Slince\Shopify\Model\Customer;

interface CustomerManagerInterface extends ManagerInterface
{
    /**
     * Gets all customers.
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
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the customer.
     *
     * @param int $id
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
     *
     * @return mixed
     */
    public function sendInvite($id, array $data);

    /**
     * Searches for customers that match a supplied query.
     *
     * @return Customer[]
     */
    public function search(array $query = []);
}
