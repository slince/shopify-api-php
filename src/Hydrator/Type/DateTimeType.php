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

use Carbon\Carbon;

class DateTimeType extends Type
{
    /**
     * {@inheritdoc}
     */
    public function format($value)
    {
        return Carbon::parse($value);
    }

    /**
     * {@inheritdoc}
     */
    public function deformat($value)
    {
        return $value->toIso8601String();
    }
}