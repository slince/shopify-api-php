<?php


namespace Slince\Shopify\Middleware;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class DelayMiddleware implements MiddlewareInterface
{
    /**
     * @var bool
     */
    protected static $delayNextRequest = false;

    /**
     * @var int
     */
    protected $sleepMicroSeconds = 0;

    /**
     * @var float
     */
    protected $callsPercent = 0;

    public function __construct(?int $sleepMicroSeconds = null, ?float $callsPercent = null)
    {
        if (null == $sleepMicroSeconds) {
            $sleepMicroSeconds = 1000000 * rand(3, 10);
        }
        if (null === $callsPercent) {
            $callsPercent = 0.8;
        }
        $this->sleepMicroSeconds = $sleepMicroSeconds;
        $this->callsPercent = $callsPercent;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(RequestInterface $request, callable $next): ResponseInterface
    {
        if (static::$delayNextRequest) {
            usleep($this->sleepMicroSeconds);
        }
        $response = $next($request);
        list($callsMade, $callsLimit) = explode('/', $response->getHeaderLine('http_x_shopify_shop_api_call_limit'));
        static::$delayNextRequest = $callsMade / $callsLimit >= $this->callsPercent;
        return $response;
    }
}