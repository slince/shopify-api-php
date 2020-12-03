<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\DiscountCode;

interface DiscountCodeManagerInterface
{
    /**
     * Finds discount codes.
     *
     * @param int   $priceRuleId
     * @param array $query
     *
     * @return DiscountCode[]
     */
    public function findAll($priceRuleId, array $query = []);

    /**
     * Finds an discount code.
     *
     * @param int $priceRuleId
     * @param int $id
     *
     * @return DiscountCode
     */
    public function find($priceRuleId, $id);

    /**
     * Updates the discount code.
     *
     * @param int   $priceRuleId
     * @param int   $id
     * @param array $data
     *
     * @return DiscountCode
     */
    public function update($priceRuleId, $id, array $data);

    /**
     * Removes the discount code by given blog id and.
     *
     * @param int $priceRuleId
     * @param int $id
     */
    public function remove($priceRuleId, $id);

    /**
     * Creates a discount code.
     *
     * @param int   $priceRuleId
     * @param array $data
     *
     * @return DiscountCode
     */
    public function create($priceRuleId, array $data);
}