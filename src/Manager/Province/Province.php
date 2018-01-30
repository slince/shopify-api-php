<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Province;

use Slince\Shopify\Common\Model\Model;

class Province extends Model
{
    /**
     * @var int
     */
    protected $countryId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var float
     */
    protected $tax;

    /**
     * @var string
     */
    protected $taxName;

    /**
     * @var string
     */
    protected $taxType;

    /**
     * @var int
     */
    protected $shippingZoneId;

    /**
     * @var float
     */
    protected $taxPercentage;

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     *
     * @return Province
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

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
     * @return Province
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Province
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     *
     * @return Province
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxName()
    {
        return $this->taxName;
    }

    /**
     * @param string $taxName
     *
     * @return Province
     */
    public function setTaxName($taxName)
    {
        $this->taxName = $taxName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * @param string $taxType
     *
     * @return Province
     */
    public function setTaxType($taxType)
    {
        $this->taxType = $taxType;

        return $this;
    }

    /**
     * @return int
     */
    public function getShippingZoneId()
    {
        return $this->shippingZoneId;
    }

    /**
     * @param int $shippingZoneId
     *
     * @return Province
     */
    public function setShippingZoneId($shippingZoneId)
    {
        $this->shippingZoneId = $shippingZoneId;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->taxPercentage;
    }

    /**
     * @param float $taxPercentage
     *
     * @return Province
     */
    public function setTaxPercentage($taxPercentage)
    {
        $this->taxPercentage = $taxPercentage;

        return $this;
    }
}