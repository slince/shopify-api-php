<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Location;

use Slince\Shopify\Common\Manager\ManagerInterface;
use Slince\Shopify\Manager\InventoryLevel\InventoryLevel;

interface LocationManagerInterface extends ManagerInterface
{
    /**
     * Gets all locations.
     *
     * @param array $query
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
     * @param array $query
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Gets the inventory levels of the location
     * @param int $id
     * @return InventoryLevel[]
     */
    public function getInventoryLevels($id);
}