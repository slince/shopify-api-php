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

namespace Slince\Shopify\Service\Inventory;

use Slince\Shopify\Model\Inventory\InventoryItem;

interface InventoryItemManagerInterface
{
    /**
     * Gets all inventory items.
     *
     * @param array $query
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
     * @param array $data
     *
     * @return InventoryItem
     */
    public function update($id, array $data);
}
