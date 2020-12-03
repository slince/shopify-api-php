<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Collect;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface CollectManagerInterface extends ManagerInterface
{
    /**
     * Gets all collects.
     *
     * @param array $query
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
     * @param array $query
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
     * @param array $data
     *
     * @return Collect
     */
    public function create(array $data);
}