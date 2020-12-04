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

namespace Slince\Shopify\Service\Store;

use Slince\Shopify\Model\Store\Currency;

interface CurrencyManagerInterface
{
    /**
     * Gets all currencies.
     *
     * @param array $query
     *
     * @return Currency[]
     */
    public function findAll(array $query = []);
}
