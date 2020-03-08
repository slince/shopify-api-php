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

class FulfillmentService extends Model
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $callbackUrl;

    /**
     * @var bool
     */
    protected $inventoryManagement;

    /**
     * @var bool
     */
    protected $trackingSupport;

    /**
     * @var bool
     */
    protected $requiresShippingMethod;

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
     * @return FulfillmentService
     */
    public function setName($name)
    {
        $this->name = $name;


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
     * @return FulfillmentService
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;


    }

    /**
     * @return bool
     */
    public function isInventoryManagement()
    {
        return $this->inventoryManagement;
    }

    /**
     * @param bool $inventoryManagement
     *
     * @return FulfillmentService
     */
    public function setInventoryManagement($inventoryManagement)
    {
        $this->inventoryManagement = $inventoryManagement;


    }

    /**
     * @return bool
     */
    public function isTrackingSupport()
    {
        return $this->trackingSupport;
    }

    /**
     * @param bool $trackingSupport
     *
     * @return FulfillmentService
     */
    public function setTrackingSupport($trackingSupport)
    {
        $this->trackingSupport = $trackingSupport;


    }

    /**
     * @return bool
     */
    public function isRequiresShippingMethod()
    {
        return $this->requiresShippingMethod;
    }

    /**
     * @param bool $requiresShippingMethod
     *
     * @return FulfillmentService
     */
    public function setRequiresShippingMethod($requiresShippingMethod)
    {
        $this->requiresShippingMethod = $requiresShippingMethod;


    }
}