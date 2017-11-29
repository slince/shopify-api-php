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

interface HydratableInterface
{
    /**
     * Get types.
     *
     * @return TypeCollection|[]
     */
    public static function getTypeCollection();
}