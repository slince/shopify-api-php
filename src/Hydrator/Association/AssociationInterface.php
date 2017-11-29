<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Taosikai <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Hydrator\Association;

use Slince\Shopify\Hydrator\HydratorInterface;
use Slince\Shopify\Hydrator\Type\TypeInterface;

interface AssociationInterface extends TypeInterface
{
    /**
     * Gets the reference class.
     *
     * @return string
     */
    public function getReferenceClass();

    /**
     * Sets the hydrator for the association.
     *
     * @param HydratorInterface $hydrator
     */
    public function setHydrator(HydratorInterface $hydrator);
}