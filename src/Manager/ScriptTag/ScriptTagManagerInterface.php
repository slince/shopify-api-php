<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ScriptTag;

interface ScriptTagManagerInterface
{
    /**
     * Gets all script tags.
     *
     * @param array $query
     *
     * @return ScriptTag[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the script tag by its id.
     *
     * @param int $id
     *
     * @return ScriptTag
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
     * Updates the script tag.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the script tag.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a script tag.
     *
     * @param array $data
     *
     * @return ScriptTag
     */
    public function create(array $data);
}