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

namespace Slince\Shopify\Service\Store;

use Slince\Shopify\Model\Store\Country;

interface CountryManagerInterface
{
    /**
     * Gets all countries.
     *
     * @param array $query
     *
     * @return Country[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the country by its id.
     *
     * @param int $id
     *
     * @return Country
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
     * Updates the country.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the country.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a country.
     *
     * @param array $data
     *
     * @return Country
     */
    public function create(array $data);
}
