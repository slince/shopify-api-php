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

namespace Slince\Shopify\Model\Shipping;

class FulfillmentService
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var bool
     */
    protected $fulfillmentOrdersOptIn;

    /**
     * @var bool
     */
    protected $includePendingStock;

    /**
     * @var int
     */
    protected $providerId;

    /**
     * @var int
     */
    protected $locationId;

    /**
     * @var string
     */
    protected $callbackUrl;

    /**
     * @var bool
     */
    protected $trackingSupport;

    /**
     * @var bool
     */
    protected $inventoryManagement;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     */
    public function setServiceName(string $serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     */
    public function setHandle(string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * @return bool
     */
    public function isFulfillmentOrdersOptIn(): bool
    {
        return $this->fulfillmentOrdersOptIn;
    }

    /**
     * @param bool $fulfillmentOrdersOptIn
     */
    public function setFulfillmentOrdersOptIn(bool $fulfillmentOrdersOptIn): void
    {
        $this->fulfillmentOrdersOptIn = $fulfillmentOrdersOptIn;
    }

    /**
     * @return bool
     */
    public function isIncludePendingStock(): bool
    {
        return $this->includePendingStock;
    }

    /**
     * @param bool $includePendingStock
     */
    public function setIncludePendingStock(bool $includePendingStock): void
    {
        $this->includePendingStock = $includePendingStock;
    }

    /**
     * @return int
     */
    public function getProviderId(): ?int
    {
        return $this->providerId;
    }

    /**
     * @param int $providerId
     */
    public function setProviderId(int $providerId): void
    {
        $this->providerId = $providerId;
    }

    /**
     * @return int
     */
    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId(int $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * @return string
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     */
    public function setCallbackUrl(string $callbackUrl): void
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return bool
     */
    public function isTrackingSupport(): bool
    {
        return $this->trackingSupport;
    }

    /**
     * @param bool $trackingSupport
     */
    public function setTrackingSupport(bool $trackingSupport): void
    {
        $this->trackingSupport = $trackingSupport;
    }

    /**
     * @return bool
     */
    public function isInventoryManagement(): bool
    {
        return $this->inventoryManagement;
    }

    /**
     * @param bool $inventoryManagement
     */
    public function setInventoryManagement(bool $inventoryManagement): void
    {
        $this->inventoryManagement = $inventoryManagement;
    }
}
