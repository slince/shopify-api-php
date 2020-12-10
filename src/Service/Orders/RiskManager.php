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

namespace Slince\Shopify\Service\Orders;

use Slince\Shopify\Model\Orders\Risk;
use Slince\Shopify\Service\Common\NestCrudManager;

class RiskManager extends NestCrudManager implements RiskManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'order_risks';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Risk::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'risk';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function count($orderId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
