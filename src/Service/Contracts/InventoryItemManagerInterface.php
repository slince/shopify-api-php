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

use Slince\Shopify\Model\InventoryItem;

interface InventoryItemManagerInterface extends ManagerInterface
{
    /**
     * Gets all inventory items.
     *
     * @return InventoryItem[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the inventory item by its id.
     *
     * @param int $id
     *
     * @return InventoryItem
     */
    public function find($id);

    /**
     * Updates the inventory item.
     *
     * @param int $id
     *
     * @return InventoryItem
     */
    public function update($id, array $data);
}
