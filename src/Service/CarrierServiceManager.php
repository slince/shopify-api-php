<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\CarrierService;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class CarrierServiceManager extends GeneralCurdable implements CarrierServiceManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'carrier_services';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'carrier_service';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return CarrierService::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        return new \Exception('The method is not supported');
    }
}