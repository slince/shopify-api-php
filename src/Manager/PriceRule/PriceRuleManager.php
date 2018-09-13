<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\PriceRule;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class PriceRuleManager extends GeneralCurdable implements PriceRuleManagerInterface
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
        return new \Exception('The method is not supported');
    }
}