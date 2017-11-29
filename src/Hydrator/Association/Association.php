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
use Slince\Shopify\Hydrator\Type\Type;

abstract class Association extends Type implements AssociationInterface
{
    protected $referenceClass;

    /**
     * @var HydratorInterface
     */
    protected $hydrator;

    public function __construct($name, $referenceClass)
    {
        $this->referenceClass = $referenceClass;
        parent::__construct($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setHydrator(HydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * {@inheritdoc}
     */
    public function getReferenceClass()
    {
        return $this->referenceClass;
    }
}