<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Redirect;

use Slince\Shopify\Common\Manager\ManagerInterface;

interface RedirectManagerInterface extends ManagerInterface
{
    /**
     * Gets all redirects.
     *
     * @param array $query
     *
     * @return Redirect[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the redirect by its id.
     *
     * @param int $id
     *
     * @return Redirect
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
     * Updates the redirect.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the redirect.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a redirect.
     *
     * @param array $data
     *
     * @return Redirect
     */
    public function create(array $data);
}