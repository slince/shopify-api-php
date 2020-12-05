<?php


namespace Slince\Shopify\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slince\Shopify\Exception\RuntimeException;

class MiddlewareChain implements MiddlewareInterface
{
    /**
     * @var MiddlewareInterface[]
     */
    protected $middlewares;

    protected $index = 0;

    public function __construct(array $middlewares = [])
    {
        $this->middlewares = $middlewares;
    }

    public function push(MiddlewareInterface $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @inheritDoc
     */
    public function handle(RequestInterface $request, callable $next): ResponseInterface
    {
        throw new RuntimeException(sprintf('The middleware queue is exhaust and the response is not returned'));
    }

    /**
     * Execute all middles.
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function execute(RequestInterface $request): ResponseInterface
    {
        $this->middlewares[] = $this;
        return $this->getNext()($request);
    }

    protected function getNext(): callable
    {
        return function(RequestInterface $request) :ResponseInterface {
            $response = $this->middlewares[$this->index]->handle($request, $this->getNext());
            $this->index ++;
            return $response;
        };
    }
}