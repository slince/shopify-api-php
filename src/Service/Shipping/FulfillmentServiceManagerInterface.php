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

namespace Slince\Shopify\Service\Shipping;

interface FulfillmentServiceManagerInterface
{
    /**
     * Gets all fulfillment services.
     *
     * @param array $query
     *
     * @return FulfillmentService[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the fulfillment service by its id.
     *
     * @param int $id
     *
     * @return FulfillmentService
     */
    public function find($id);

    /**
     * Updates the fulfillment service.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the fulfillment service.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a fulfillment service.
     *
     * @param array $data
     *
     * @return FulfillmentService
     */
    public function create(array $data);
}
