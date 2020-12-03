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

namespace Slince\Shopify;

use Psr\Http\Message\RequestInterface;

class PrivateAppCredential implements CredentialInterface
{
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $sharedSecret;

    public function __construct($apiKey, $password, $sharedSecret)
    {
        $this->apiKey = $apiKey;
        $this->password = $password;
        $this->sharedSecret = $sharedSecret;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }

    /**
     * @param string $sharedSecret
     */
    public function setSharedSecret(string $sharedSecret)
    {
        $this->sharedSecret = $sharedSecret;
    }

    /**
     * {@inheritdoc}
     */
    public function applyToRequest(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('Authorization', 'Basic '
            .base64_encode("{$this->apiKey}:{$this->password}"));
    }
}
