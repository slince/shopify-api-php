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

use DateTime;

class Fulfillment extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $service;

    /**
     * @var string
     */
    protected $shipmentStatus;

    /**
     * @var string
     */
    protected $trackingCompany;

    /**
     * @var string
     */
    protected $trackingNumber;

    /**
     * @var array
     */
    protected $trackingNumbers;

    /**
     * @var string
     */
    protected $trackingUrl;

    /**
     * @var array
     */
    protected $trackingUrls;

    /**
     * @var array
     */
    protected $receipt;

    /**
     * @var LineItem[]
     */
    protected $lineItems;

    /**
     * @var integer
     */
    protected $locationId;

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     *
     * @return Fulfillment
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;


    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     *
     * @return Fulfillment
     */
    public function setService($service)
    {
        $this->service = $service;


    }

    /**
     * @return string
     */
    public function getShipmentStatus()
    {
        return $this->shipmentStatus;
    }

    /**
     * @param string $shipmentStatus
     *
     * @return Fulfillment
     */
    public function setShipmentStatus($shipmentStatus)
    {
        $this->shipmentStatus = $shipmentStatus;


    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     *
     * @return Fulfillment
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;


    }

    /**
     * @return array
     */
    public function getTrackingUrls()
    {
        return $this->trackingUrls;
    }

    /**
     * @param array $trackingUrls
     *
     * @return Fulfillment
     */
    public function setTrackingUrls($trackingUrls)
    {
        $this->trackingUrls = $trackingUrls;


    }

    /**
     * @return array
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * @param array $receipt
     *
     * @return Fulfillment
     */
    public function setReceipt($receipt)
    {
        $this->receipt = $receipt;


    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return Fulfillment
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;


    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *
     * @return Fulfillment
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;


    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     *
     * @return Fulfillment
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;


    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return Fulfillment
     */
    public function setStatus($status)
    {
        $this->status = $status;


    }

    /**
     * @return string
     */
    public function getTrackingCompany()
    {
        return $this->trackingCompany;
    }

    /**
     * @param string $trackingCompany
     *
     * @return Fulfillment
     */
    public function setTrackingCompany($trackingCompany)
    {
        $this->trackingCompany = $trackingCompany;


    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     *
     * @return Fulfillment
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;


    }

    /**
     * @return LineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param LineItem[] $lineItems
     *
     * @return Fulfillment
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;


    }

    /**
     * @return array
     */
    public function getTrackingNumbers()
    {
        return $this->trackingNumbers;
    }

    /**
     * @param array $trackingNumbers
     *
     * @return Fulfillment
     */
    public function setTrackingNumbers($trackingNumbers)
    {
        $this->trackingNumbers = $trackingNumbers;


    }
}
