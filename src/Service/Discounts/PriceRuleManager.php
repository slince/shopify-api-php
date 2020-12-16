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

use Slince\Shopify\Model\Discounts\PriceRule;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class PriceRuleManager extends GeneralCurdManager implements PriceRuleManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'price_rules';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'price_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return PriceRule::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        throw new \Exception('The method is not supported');
    }
}
