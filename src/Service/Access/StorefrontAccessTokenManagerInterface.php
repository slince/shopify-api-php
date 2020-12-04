<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Access;

use Slince\Shopify\Model\Access\StorefrontAccessToken;

interface StorefrontAccessTokenManagerInterface
{
    /**
     * Finds access scopes.
     *
     * @param array $query
     *
     * @return StorefrontAccessToken[]
     */
    public function findAll(array $query = []);

    /**
     * Creates a access token.
     *
     * @param array $data
     *
     * @return StorefrontAccessToken
     */
    public function create(array $data);

    /**
     * Removes the access token..
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);
}
