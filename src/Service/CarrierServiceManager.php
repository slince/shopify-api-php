<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service;

use Exception;
use Slince\Shopify\Model\CarrierService;
use Slince\Shopify\Service\Contracts\CarrierServiceManagerInterface;

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
        return new Exception('The method is not supported');
    }
}