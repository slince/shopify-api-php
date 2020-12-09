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

namespace Slince\Shopify\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface MiddlewareInterface
{
    /**
     * Handle the request and return a response.
     *
     * @param RequestInterface $request
     * @param callable $next
     * @return ResponseInterface
     */
    public function handle(RequestInterface $request, callable $next): ResponseInterface;
}