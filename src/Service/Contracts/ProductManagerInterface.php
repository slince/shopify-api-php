<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Contracts;

use Slince\Shopify\Model\Product;

interface ProductManagerInterface extends ManagerInterface
{
    /**
     * Gets all products.
     *
     * @return Product[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the product by its id.
     *
     * @param int $id
     *
     * @return Product
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the product.
     *
     * @param int $id
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the product.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a product.
     *
     * @return Product
     */
    public function create(array $data);
}
