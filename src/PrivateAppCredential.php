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
     *
     * @return PrivateAppCredential
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return PrivateAppCredential
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getSharedSecret()
    {
        return $this->sharedSecret;
    }

    /**
     * @param string $sharedSecret
     *
     * @return PrivateAppCredential
     */
    public function setSharedSecret($sharedSecret)
    {
        $this->sharedSecret = $sharedSecret;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function applyToRequest(RequestInterface $request)
    {
        return $request->withHeader('Authorization', 'Basic '
            .base64_encode("{$this->apiKey}:{$this->password}"));
    }
}