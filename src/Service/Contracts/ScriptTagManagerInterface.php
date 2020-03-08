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

use Slince\Shopify\Model\ScriptTag;

interface ScriptTagManagerInterface
{
    /**
     * Gets all script tags.
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
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the script tag.
     *
     * @param int $id
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
     * @return ScriptTag
     */
    public function create(array $data);
}
