<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Taosikai <taosikai@yeah.net>
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
     * @param string|object        $target
     * @param array                $data
     * @param TypeCollection|array $types
     *
     * @return object
     */
    public function hydrate($target, array $data, $types = []);

    /**
     * Extracts data from an object.
     *
     * @param object $object
     *
     * @return array
     */
    public function extract($object);
}