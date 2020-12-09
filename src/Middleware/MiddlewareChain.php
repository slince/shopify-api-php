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

    protected $isFirstExecute = false;

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
        if ($this->isFirstExecute) {
            $this->middlewares[] = $this;
            $this->isFirstExecute = false;
        }
        $response = $this->getNext()($request);
        $this->index = 0;
        return $response;
    }

    protected function getNext(): callable
    {
        $next = function(RequestInterface $request) :ResponseInterface {
            return $this->middlewares[$this->index]->handle($request, $this->getNext());
        };
        $this->index ++;
        return $next;
    }
}