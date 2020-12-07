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

use Slince\Shopify\Model\Shipping\AssignedFulfillmentOrder;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class AssignedFulfillmentOrderManager extends GeneralCurdManager implements AssignedFulfillmentOrderManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AssignedFulfillmentOrder::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'fulfillment_order';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'assigned_fulfillment_orders';
    }
}
