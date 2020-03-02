<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Fulfillment;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;
use Slince\Shopify\Manager\Order\LineItem;

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
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     *
     * @return Fulfillment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     *
     * @return Fulfillment
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
    }
}
