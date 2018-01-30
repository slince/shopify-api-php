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

use Psr\Http\Message\RequestInterface;

interface CredentialInterface
{
    /**
     * Apply the credential to the request.
     *
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    public function applyToRequest(RequestInterface $request);
}