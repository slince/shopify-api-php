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

use Slince\Shopify\Model\Inventory\InventoryLevel;
use Slince\Shopify\Model\Inventory\Location;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class LocationManager extends GeneralCurdManager implements LocationManagerInterface
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
        throw new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        throw new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        throw new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function getInventoryLevels($id)
    {
        $endpoint = sprintf('locations/%s/inventory_levels', $id);
        $data = $this->client->get($endpoint);
        return $this->client->getHydrator()->hydrateMany($data['inventory_levels'], InventoryLevel::class);
    }
}
