<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Taosikai <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Hydrator\Type;

interface TypeInterface
{
    /**
     * Gets the property name.
     *
     * @return string
     */
    public function getName();

    /**
     * @param mixed $value
     *
     * @return mixed
     */
    public function format($value);

    /**
     * @return mixed
     */
    public function deformat($value);
}