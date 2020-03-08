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
use Slince\Shopify\Model\CustomerSavedSearch;

interface CustomerSavedSearchManagerInterface extends ManagerInterface
{
    /**
     * Gets all customer saved searches.
     *
     * @return CustomerSavedSearch[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the customer saved search by its id.
     *
     * @param int $id
     *
     * @return CustomerSavedSearch
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the customer saved search.
     *
     * @param int $id
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the customer saved search.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a customer saved search.
     *
     * @return CustomerSavedSearch
     */
    public function create(array $data);

    /**
     * Receive all Customers resulting from a Customer Saved Search.
     *
     * @param int $id
     *
     * @return Customer[]
     */
    public function getCustomers($id);
}
