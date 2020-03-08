<?php

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
     * @param string $target
     * @param array $data
     *
     * @return object
     */
    public function hydrate(string $target, array $data);

    /**
     * Extracts data from an object.
     *
     * @param object $object
     *
     * @return array
     */
    public function extract($object);
}