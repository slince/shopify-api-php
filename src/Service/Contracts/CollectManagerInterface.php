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

use Slince\Shopify\Model\Collect;

interface CollectManagerInterface
{
    /**
     * Gets all collects.
     *
     * @return Collect[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the collect by its id.
     *
     * @param int $id
     *
     * @return Collect
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Removes the collect.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a blog.
     *
     * @return Collect
     */
    public function create(array $data);
}
