<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Inventory;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface InventoryLevelManagerInterface extends ManagerInterface
{
    /**
     * Retrieves a list of inventory levels.
     *
     * @param array $query
     *
     * @return InventoryLevel[]
     */
    public function findAll(array $query = []);

    /**
     * Deletes an inventory level of an inventory item at a location
     *
     * @param array $query
     */
    public function remove(array $query = []);

    /**
     * Adjusts the inventory level of an inventory item at a single location
     * @param array $data
     * @return InventoryLevel
     */
    public function adjust(array $data);

    /**
     * Connects an inventory item to a location by creating an inventory level
     * at that location.
     *
     * @param int $id
     *
     * @return InventoryItem
     */
    public function connect($id);
}