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

namespace Slince\Shopify\Exception;

use GuzzleHttp\Utils;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ClientException extends RuntimeException
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var ResponseInterface
     */
    protected $response;

    public function __construct(RequestInterface $request, ResponseInterface $response = null, string $message = '', int $code = 0)
    {
        $this->request = $request;
        $this->response = $response;
        $message = $message ?: ($response ? static::extractErrorMessages($response) : 'Blank error message');
        parent::__construct($message, $code);
    }

    protected static function extractErrorMessages(ResponseInterface $response)
    {
        $rawBody = (string)$response->getBody();
        try {
            $data = Utils::jsonDecode($rawBody, true);
        } catch (\Exception $e) {
            $data = [];
        }
        if (isset($data['errors']) && is_string($data['errors'])) {
            return $data['errors'];
        }
        return $rawBody;
    }

    /**
     * Gets the request.
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * Gets the response.
     *
     * @return ResponseInterface
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
