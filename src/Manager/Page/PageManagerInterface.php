<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Page;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface PageManagerInterface extends ManagerInterface
{
    /**
     * Gets all pages.
     *
     * @param array $query
     *
     * @return Page[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the page by its id.
     *
     * @param int $id
     *
     * @return Page
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
     * Updates the page.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the page.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a page.
     *
     * @param array $data
     *
     * @return Page
     */
    public function create(array $data);
}