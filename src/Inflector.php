<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify;

use Doctrine\Inflector\InflectorFactory;

final class Inflector
{
    /**
     * @var \Doctrine\Inflector\Inflector
     */
    protected static $inflector;

    protected static function getInflector()
    {
        if (null !== static::$inflector) {
            return static::$inflector;
        }
        return static::$inflector = InflectorFactory::create()->build();
    }

    public static function pluralize(string $word)
    {
        return static::getInflector()->pluralize($word);
    }

    public static function tableize(string $word)
    {
        return static::getInflector()->tableize($word);
    }

    public static function singularize(string $word)
    {
        return static::getInflector()->singularize($word);
    }
}