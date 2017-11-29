<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Taosikai <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ShippingZone;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class ShippingZoneManager extends GeneralCurdable implements ShippingZoneManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'shipping_zones';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'shipping_zone';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return ShippingZone::class;
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data, $parentResourceId = null)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id, $parentResourceId = null)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function find($id, $parentResourceId = null)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $filters = [], $parentResourceId = null)
    {
        throw new \Exception('The action is not supported');
    }
}