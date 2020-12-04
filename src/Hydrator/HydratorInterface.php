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

namespace Slince\Shopify\Hydrator;

interface HydratorInterface
{
    /**
     * Hydrate object from array.
     *
     * @param array $data
     * @param string $type
     * @return object
     */
    public function hydrate(array $data, string $type): object;

    /**
     * Hydrate many object from array.
     *
     * @param array $data
     * @param string $type
     * @return object[]
     */
    public function hydrateMany(array $data, string $type): array;

    /**
     * Extracts data from an object.
     *
     * @param object $object
     *
     * @return array
     */
    public function extract($object): array;
}
