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

namespace Slince\Shopify\Service\Shipping;

use Slince\Shopify\Model\Shipping\CarrierService;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class CarrierServiceManager extends GeneralCurdManager implements CarrierServiceManagerInterface
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
        throw new \Exception('The method is not supported');
    }
}
