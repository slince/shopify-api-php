<?php


namespace Slince\Shopify\Middleware;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slince\Shopify\Exception\ClientException;

class RequestMiddleware implements MiddlewareInterface
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client = null)
    {
        if (null === $client) {
            $client = new Client([
                'verify' => false
            ]);
        }
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(RequestInterface $request, callable $next): ResponseInterface
    {
        try {
            return $this->client->send($request);
        } catch (RequestException $exception) {
            $response = $exception->getResponse();
            if (!$response) {
                throw new ClientException($request, null, $exception->getMessage(), $exception->getCode());
            }
            return $response;
        }
    }
}