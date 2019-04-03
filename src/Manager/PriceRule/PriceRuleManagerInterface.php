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

use Slince\Shopify\Common\Manager\ManagerInterface;

interface PriceRuleManagerInterface extends ManagerInterface
{
    /**
     * Gets all price rules.
     *
     * @param array $query
     *
     * @return PriceRule[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the price rule by its id.
     *
     * @param int $id
     *
     * @return PriceRule
     */
    public function find($id);

    /**
     * Updates the price rule.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the price rule.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a price rule.
     *
     * @param array $data
     *
     * @return PriceRule
     */
    public function create(array $data);
}