<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify;

use Doctrine\Common\Inflector\Inflector as LegacyInflector;
use Doctrine\Inflector\InflectorFactory;

if (class_exists(InflectorFactory::class)) {
    final class Inflector
    {
        /**
         * @var \Doctrine\Inflector\Inflector
         */
        protected static $inflector;

        protected static function getInflector(): \Doctrine\Inflector\Inflector
        {
            if (null !== Inflector::$inflector) {
                return Inflector::$inflector;
            }
            return Inflector::$inflector = InflectorFactory::create()->build();
        }

        public static function pluralize(string $word): string
        {
            return static::getInflector()->pluralize($word);
        }

        public static function tableize(string $word): string
        {
            return static::getInflector()->tableize($word);
        }

        public static function classify(string $word): string
        {
            return static::getInflector()->classify($word);
        }


        public static function singularize(string $word)
        {
            return static::getInflector()->singularize($word);
        }
    }
} else {
    final class Inflector extends LegacyInflector
    {

    }
}