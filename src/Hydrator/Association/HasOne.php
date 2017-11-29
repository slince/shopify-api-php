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

class HasOne extends Association
{
    /**
     * {@inheritdoc}
     */
    public function format($value)
    {
        return $this->hydrator->hydrate($this->getReferenceClass(), $value);
    }

    /**
     * {@inheritdoc}
     */
    public function deformat($value)
    {
        return $this->hydrator->extract($value);
    }
}