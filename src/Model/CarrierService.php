<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Model;

class CarrierService extends Model
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var bool
     */
    protected $serviceDiscovery;

    /**
     * @var string
     */
    protected $carrierServiceType;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var string
     */
    protected $callbackUrl;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *

     */
    public function setName($name)
    {
        $this->name = $name;


    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *

     */
    public function setActive($active)
    {
        $this->active = $active;


    }

    /**
     * @return bool
     */
    public function isServiceDiscovery()
    {
        return $this->serviceDiscovery;
    }

    /**
     * @param bool $serviceDiscovery
     *

     */
    public function setServiceDiscovery($serviceDiscovery)
    {
        $this->serviceDiscovery = $serviceDiscovery;


    }

    /**
     * @return string
     */
    public function getCarrierServiceType()
    {
        return $this->carrierServiceType;
    }

    /**
     * @param string $carrierServiceType
     *

     */
    public function setCarrierServiceType($carrierServiceType)
    {
        $this->carrierServiceType = $carrierServiceType;


    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     *

     */
    public function setFormat($format)
    {
        $this->format = $format;


    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     *

     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;


    }
}