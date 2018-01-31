<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Order;

class ClientDetails
{
    /**
     * @var string
     */
    protected $browserIp;

    /**
     * @var string
     */
    protected $acceptLanguage;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @var string
     */
    protected $sessionHash;

    /**
     * @var int
     */
    protected $browserWidth;

    /**
     * @var int
     */
    protected $browserHeight;

    /**
     * @return string
     */
    public function getBrowserIp()
    {
        return $this->browserIp;
    }

    /**
     * @param string $browserIp
     *
     * @return ClientDetails
     */
    public function setBrowserIp($browserIp)
    {
        $this->browserIp = $browserIp;

        return $this;
    }

    /**
     * @return string
     */
    public function getAcceptLanguage()
    {
        return $this->acceptLanguage;
    }

    /**
     * @param string $acceptLanguage
     *
     * @return ClientDetails
     */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     *
     * @return ClientDetails
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * @return string
     */
    public function getSessionHash()
    {
        return $this->sessionHash;
    }

    /**
     * @param string $sessionHash
     *
     * @return ClientDetails
     */
    public function setSessionHash($sessionHash)
    {
        $this->sessionHash = $sessionHash;

        return $this;
    }

    /**
     * @return int
     */
    public function getBrowserWidth()
    {
        return $this->browserWidth;
    }

    /**
     * @param int $browserWidth
     *
     * @return ClientDetails
     */
    public function setBrowserWidth($browserWidth)
    {
        $this->browserWidth = $browserWidth;

        return $this;
    }

    /**
     * @return int
     */
    public function getBrowserHeight()
    {
        return $this->browserHeight;
    }

    /**
     * @param int $browserHeight
     *
     * @return ClientDetails
     */
    public function setBrowserHeight($browserHeight)
    {
        $this->browserHeight = $browserHeight;

        return $this;
    }
}