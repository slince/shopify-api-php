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

namespace Slince\Shopify\Model\Store\Common;

class CarrierShippingRateProvider
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $carrierServiceId;

    /**
     * @var string
     */
    protected $flatModifier;

    /**
     * @var string
     */
    protected $percentModifier;

    /**
     * @var array
     */
    protected $serviceFilter;

    /**
     * @var int
     */
    protected $shippingZoneId;

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
     * @return int
     */
    public function getCarrierServiceId(): ?int
    {
        return $this->carrierServiceId;
    }

    /**
     * @param int $carrierServiceId
     */
    public function setCarrierServiceId(int $carrierServiceId): void
    {
        $this->carrierServiceId = $carrierServiceId;
    }

    /**
     * @return string
     */
    public function getFlatModifier(): ?string
    {
        return $this->flatModifier;
    }

    /**
     * @param string $flatModifier
     */
    public function setFlatModifier(string $flatModifier): void
    {
        $this->flatModifier = $flatModifier;
    }

    /**
     * @return string
     */
    public function getPercentModifier(): ?string
    {
        return $this->percentModifier;
    }

    /**
     * @param string $percentModifier
     */
    public function setPercentModifier(string $percentModifier): void
    {
        $this->percentModifier = $percentModifier;
    }

    /**
     * @return array
     */
    public function getServiceFilter(): array
    {
        return $this->serviceFilter;
    }

    /**
     * @param array $serviceFilter
     */
    public function setServiceFilter(array $serviceFilter): void
    {
        $this->serviceFilter = $serviceFilter;
    }

    /**
     * @return int
     */
    public function getShippingZoneId(): ?int
    {
        return $this->shippingZoneId;
    }

    /**
     * @param int $shippingZoneId
     */
    public function setShippingZoneId(int $shippingZoneId): void
    {
        $this->shippingZoneId = $shippingZoneId;
    }
}