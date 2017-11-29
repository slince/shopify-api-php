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

class HasMany extends Association
{
    /**
     * {@inheritdoc}
     */
    public function format($value)
    {
        $objects = [];
        foreach ((array) $value as $item) {
            $objects[] = $this->hydrator->hydrate($this->getReferenceClass(), $item);
        }

        return $objects;
    }

    /**
     * {@inheritdoc}
     */
    public function deformat($value)
    {
        $items = [];
        foreach ((array) $value as $item) {
            $items[] = $this->hydrator->extract($item);
        }

        return $items;
    }
}