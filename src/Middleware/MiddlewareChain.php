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
use Slince\Shopify\Exception\InvalidArgumentException;
use Slince\Shopify\Exception\RuntimeException;

class MiddlewareChain implements MiddlewareInterface
{
    /**
     * @var MiddlewareInterface[]
     */
    protected $middlewares;

    protected $index = 0;

    protected $isFirstExecute = true;

    public function __construct(array $middlewares = [])
    {
        $this->middlewares = $middlewares;
    }

    /**
     * Add an middle to the chain.
     *
     * @param MiddlewareInterface|callable $middleware
     */
    public function push($middleware)
    {
        $this->middlewares[] = $this->decorateMiddleware($middleware);
    }

    /**
     * Prepend an middle to the chain.
     *
     * @param MiddlewareInterface|callable $middleware
     */
    public function prepend($middleware)
    {
        array_unshift($this->middlewares, $this->decorateMiddleware($middleware));
    }

    protected function decorateMiddleware($middleware): MiddlewareInterface
    {
        if ($middleware instanceof MiddlewareInterface) {
            return $middleware;
        }
        if (!is_callable($middleware)) {
            throw new InvalidArgumentException('The middleware should be a callable or instance of MiddlewareInterface');
        }
        return new CallableMiddleware($middleware);
    }

    /**
     * @inheritDoc
     */
    public function handle(RequestInterface $request, callable $defaultHandler): ResponseInterface
    {
        $this->index = -1; // Reset the chain
        return $this->getNext($defaultHandler)($request);
    }

    protected function getNext($defaultHandler): callable
    {
        $this->index ++; // Move next
        if (!isset($this->middlewares[$this->index])) {
            return $defaultHandler;
        }
        return function(RequestInterface $request) use($defaultHandler): ResponseInterface {
            return $this->middlewares[$this->index]->handle($request, $this->getNext($defaultHandler));
        };
    }
}
