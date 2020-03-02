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

use Slince\Shopify\Common\Manager\AbstractManager;

class InventoryLevelManager extends AbstractManager implements InventoryLevelManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'inventory_levels';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'inventory_level';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return InventoryLevel::class;
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(array $query = [])
    {
        $data = $this->client->get('inventory_levels', $query);

        return $this->createMany(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function remove($inventoryItemId, $locationId)
    {
        $this->client->delete('inventory_levels', [
            'inventory_item_id' => $inventoryItemId,
            'location_id' => $locationId,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function adjust(array $data)
    {
        $data = $this->client->post('inventory_levels/adjust', $data);

        return $this->fromArray(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function connect(array $data)
    {
        $data = $this->client->post('inventory_levels/connect', $data);

        return $this->fromArray(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function set(array $data)
    {
        $data = $this->client->post('inventory_levels/set', $data);

        return $this->fromArray(reset($data));
    }
}