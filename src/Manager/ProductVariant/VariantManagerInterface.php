<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ProductVariant;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface VariantManagerInterface extends ManagerInterface
{
    /**
     * Gets all variants of the product.
     *
     * @param int   $productId
     * @param array $query
     *
     * @return Variant[]
     */
    public function findAll($productId, array $query = []);

    /**
     * Gets the variant by its id.
     *
     * @param int $id
     *
     * @return Variant
     */
    public function find($id);

    /**
     * Gets the variant counts of the product.
     *
     * @param int   $productId
     * @param array $query
     *
     * @return int
     */
    public function count($productId, array $query = []);

    /**
     * Updates the product.
     *
     * @param int   $id
     * @param array $data
     *
     * @return Variant
     */
    public function update($id, array $data);

    /**
     * Removes the variant of the product.
     *
     * @param int $productId
     * @param int $id
     */
    public function remove($productId, $id);

    /**
     * Creates a variant for the product.
     *
     * @param int   $productId
     * @param array $data
     *
     * @return Variant
     */
    public function create($productId, array $data);
}