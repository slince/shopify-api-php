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

use Slince\Shopify\Common\Manager\GeneralCurdable;
use Slince\Shopify\Manager\InventoryLevel\InventoryLevel;

class LocationManager extends GeneralCurdable implements LocationManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'locations';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Location::class;
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        return new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        return new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        return new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function getInventoryLevels($id)
    {
        $endpoint = sprintf('locations/%s/inventory_levels', $id);
        $data = $this->client->get($endpoint);
        return $this->createMany($data['inventory_levels'], InventoryLevel::class);
    }
}