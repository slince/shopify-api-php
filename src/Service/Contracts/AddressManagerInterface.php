<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\CustomerAddress;

interface AddressManagerInterface
{
    /**
     * Finds addresses.
     *
     * @param int   $customerId
     * @param array $query
     *
     * @return Address[]
     */
    public function findAll($customerId, array $query = []);

    /**
     * Finds an address.
     *
     * @param int $customerId
     * @param int $id
     *
     * @return Address
     */
    public function find($customerId, $id);

    /**
     * Updates the address.
     *
     * @param int   $customerId
     * @param int   $id
     * @param array $data
     *
     * @return Address
     */
    public function update($customerId, $id, array $data);

    /**
     * Removes the address by given blog id and.
     *
     * @param int $customerId
     * @param int $id
     */
    public function remove($customerId, $id);

    /**
     * Creates a address.
     *
     * @param int   $customerId
     * @param array $data
     *
     * @return Address
     */
    public function create($customerId, array $data);

    /**
     * Perform bulk operations against a number of addresses.
     *
     * @param int    $customerId
     * @param array  $ids
     * @param string $operation
     */
    public function bulkSet($customerId, array $ids, $operation);

    /**
     * Sets the default address.
     *
     * @param int $customerId
     * @param int $id
     *
     * @return Address
     */
    public function setDefault($customerId, $id);
}