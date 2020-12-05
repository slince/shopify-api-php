<?php


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