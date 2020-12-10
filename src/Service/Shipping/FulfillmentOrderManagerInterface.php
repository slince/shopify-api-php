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

use Slince\Shopify\Model\Orders\Order;
use Slince\Shopify\Model\Shipping\CarrierService;
use Slince\Shopify\Model\Shipping\FulfillmentOrder;

interface FulfillmentOrderManagerInterface
{
    /**
     * Gets all fulfillment orders
     *
     * @param int $orderId
     * @param array $query
     *
     * @return FulfillmentOrder[]
     */
    public function findAll($orderId, array $query = []);

    /**
     * Gets the fulfillment order by its id
     *
     * @param int $id
     *
     * @return FulfillmentOrder
     */
    public function find($id);

    /**
     * Close an order.
     *
     * @param int $id
     * @param array $data
     * @return FulfillmentOrder
     */
    public function close($id, array $data);

    /**
     * Cancel an order.
     *
     * @param int $id
     *
     * @return FulfillmentOrder
     */
    public function cancel($id);
}
