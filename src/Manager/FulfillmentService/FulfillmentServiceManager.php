<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\FulfillmentService;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class FulfillmentServiceManager extends GeneralCurdable implements FulfillmentServiceManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'fulfillment_services';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'fulfillment_service';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return FulfillmentService::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        return new \Exception('The method is not supported');
    }
}