<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Policy;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface PolicyManagerInterface extends ManagerInterface
{
    /**
     * Gets all policies.
     *
     * @param array $query
     *
     * @return Policy[]
     */
    public function findAll(array $query = []);
}