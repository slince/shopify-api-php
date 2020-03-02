<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Blog;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface BlogManagerInterface extends ManagerInterface
{
    /**
     * Gets all blogs.
     *
     * @param array $query
     *
     * @return Blog[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the blog by its id.
     *
     * @param int $id
     *
     * @return Blog
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
     * Updates the blog.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the blog.
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
     * @return Blog
     */
    public function create(array $data);
}