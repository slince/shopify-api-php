<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Asset;

interface AssetManagerInterface
{
    /**
     * Finds articles.
     *
     * @param int   $themeId
     * @param array $query
     *
     * @return Asset[]
     */
    public function findAll($themeId, array $query = []);

    /**
     * Finds an asset.
     *
     * @param int $themeId
     * @param int $id
     *
     * @return Asset
     */
    public function find($themeId, $id);

    /**
     * Gets the count.
     *
     * @param int   $themeId
     * @param array $query
     *
     * @return int
     */
    public function count($themeId, array $query = []);

    /**
     * Updates the asset.
     *
     * @param int   $themeId
     * @param int   $id
     * @param array $data
     *
     * @return Asset
     */
    public function update($themeId, $id, array $data);

    /**
     * Removes the asset by given id and theme id.
     *
     * @param int $themeId
     * @param int $id
     */
    public function remove($themeId, $id);

    /**
     * Creates a asset.
     *
     * @param int   $themeId
     * @param array $data
     *
     * @return Asset
     */
    public function create($themeId, array $data);
}