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

interface AssignedFulfillmentOrderManagerInterface
{
    /**
     * Gets all carrier services.
     *
     * @param array $query
     *
     * @return AssignedFulfillmentOrder[]
     */
    public function findAll(array $query = []);
}
