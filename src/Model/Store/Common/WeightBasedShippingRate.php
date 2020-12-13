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

class WeightBasedShippingRate
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
    protected $price;

    /**
     * @var int
     */
    protected $shippingZoneId;

    /**
     * @var float
     */
    protected $weightLow;

    /**
     * @var float
     */
    protected $weightHigh;

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
    public function getName(): ?string
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
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
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

    /**
     * @return float
     */
    public function getWeightLow(): ?float
    {
        return $this->weightLow;
    }

    /**
     * @param float $weightLow
     */
    public function setWeightLow(float $weightLow): void
    {
        $this->weightLow = $weightLow;
    }

    /**
     * @return float
     */
    public function getWeightHigh(): ?float
    {
        return $this->weightHigh;
    }

    /**
     * @param float $weightHigh
     */
    public function setWeightHigh(float $weightHigh): void
    {
        $this->weightHigh = $weightHigh;
    }
}