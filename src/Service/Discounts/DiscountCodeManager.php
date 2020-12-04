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

namespace Slince\Shopify\Service\Discounts;

use Slince\Shopify\Model\Discounts\DiscountCode;
use Slince\Shopify\Service\Common\NestCrudManager;

class DiscountCodeManager extends NestCrudManager implements DiscountCodeManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'discount_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'discount_code';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'price_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return DiscountCode::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count($priceRuleId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
