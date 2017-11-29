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

use Slince\Shopify\Hydrator\Type\TypeInterface;

class TypeCollection implements \IteratorAggregate
{
    /**
     * @var TypeInterface[]
     */
    protected $types;

    public function __construct(array $types)
    {
        $this->types = $types;
    }

    /**
     * @return TypeInterface[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->getTypes());
    }
}