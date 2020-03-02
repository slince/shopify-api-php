<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\CarrierService;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface CarrierServiceManagerInterface extends ManagerInterface
{
    /**
     * Gets all carrier services.
     *
     * @param array $query
     *
     * @return CarrierService[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the carrier service by its id.
     *
     * @param int $id
     *
     * @return CarrierService
     */
    public function find($id);

    /**
     * Updates the carrier service.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the carrier service.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a carrier service.
     *
     * @param array $data
     *
     * @return CarrierService
     */
    public function create(array $data);
}