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

use Slince\Shopify\Exception\InvalidArgumentException;

class AccessToken
{
    /**
     * @var string
     */
    protected $token;

    public function __construct($token)
    {
        if (0 === preg_match('/^([a-zA-Z0-9_]{10,100})$/', $token)) {
            throw new InvalidArgumentException('Access token should be between 10 and 100 letters and numbers');
        }
        $this->token = $token;
    }

    /**
     * Transform the token to string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->token;
    }
}
