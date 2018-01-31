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

use Slince\Shopify\Common\Model\ModelInterface;

interface HydratorInterface
{
    /**
     * Hydrate object from array.
     *
     * @param string $target
     * @param array  $data
     *
     * @return ModelInterface
     */
    public function hydrate($target, array $data);

    /**
     * Extracts data from an object.
     *
     * @param ModelInterface $object
     *
     * @return array
     */
    public function extract($object);
}