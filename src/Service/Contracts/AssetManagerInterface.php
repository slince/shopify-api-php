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
     * Finds assets.
     *
     * @param int $themeId
     *
     * @return Asset[]
     */
    public function findAll($themeId);

    /**
     * Finds an asset.
     *
     * @param int    $themeId
     * @param string $key
     *
     * @return Asset
     */
    public function find($themeId, $key);

    /**
     * Updates the assets.
     *
     * @param int $themeId
     * @param array $data
     * @return Asset
     */
    public function update($themeId, array $data);

    /**
     * Removes the asset by given key and theme id.
     *
     * @param int    $themeId
     * @param string $key
     */
    public function remove($themeId, $key);
}