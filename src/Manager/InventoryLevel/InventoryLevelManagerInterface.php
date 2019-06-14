<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\InventoryLevel;

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
     * Adjusts the inventory level of an inventory item at a location.
     *                                                                
     * @param array $data
     *                                                                
     * @return InventoryLevel
     */
    public function adjust(array $data);

    /**
     * Deletes an inventory level of an inventory item at a location.
     *
     * @param int $inventoryItemId
     * @param int $locationId
     */
    public function remove($inventoryItemId, $locationId);

    /**
     * Connects an inventory item to a location.
     *
     * @param array $data
     *
     * @return InventoryLevel
     */
    public function connect(array $data);

    /**
     * Sets the inventory level for an inventory item at a location.
     *                                                                
     * @param array $data
     *                                                                
     * @return InventoryLevel
     */
    public function set(array $data);
}