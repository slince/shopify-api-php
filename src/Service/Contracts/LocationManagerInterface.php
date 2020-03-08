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

use Slince\Shopify\Model\InventoryLevel;
use Slince\Shopify\Model\Location;

interface LocationManagerInterface extends ManagerInterface
{
    /**
     * Gets all locations.
     *
     * @return Location[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the location by its id.
     *
     * @param int $id
     *
     * @return Location
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Gets the inventory levels of the location.
     *
     * @param int $id
     *
     * @return InventoryLevel[]
     */
    public function getInventoryLevels($id);
}
