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

namespace Slince\Shopify\Model\Store;

use Slince\Shopify\Model\Store\Common\CarrierShippingRateProvider;
use Slince\Shopify\Model\Store\Common\PriceBasedShippingRate;
use Slince\Shopify\Model\Store\Common\WeightBasedShippingRate;

class ShippingZone
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Country[]
     */
    protected $countries;

    /**
     * @var Province[]
     */
    protected $provinces;

    /**
     * @var CarrierShippingRateProvider[]
     */
    protected $carrierShippingRateProviders;

    /**
     * @var PriceBasedShippingRate
     */
    protected $priceBasedShippingRates;

    /**
     * @var WeightBasedShippingRate
     */
    protected $weightBasedShippingRates;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
      */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Country[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param Country[] $countries
      */
    public function setCountries($countries)
    {
        $this->countries = $countries;
    }

    /**
     * @return Province[]
     */
    public function getProvinces()
    {
        return $this->provinces;
    }

    /**
     * @param Province[] $provinces
      */
    public function setProvinces($provinces)
    {
        $this->provinces = $provinces;
    }

    /**
     * @return array
     */
    public function getCarrierShippingRateProviders()
    {
        return $this->carrierShippingRateProviders;
    }

    /**
     * @param array $carrierShippingRateProviders
      */
    public function setCarrierShippingRateProviders($carrierShippingRateProviders)
    {
        $this->carrierShippingRateProviders = $carrierShippingRateProviders;
    }

    /**
     * @return array
     */
    public function getPriceBasedShippingRates()
    {
        return $this->priceBasedShippingRates;
    }

    /**
     * @param array $priceBasedShippingRates
      */
    public function setPriceBasedShippingRates($priceBasedShippingRates)
    {
        $this->priceBasedShippingRates = $priceBasedShippingRates;
    }

    /**
     * @return array
     */
    public function getWeightBasedShippingRates()
    {
        return $this->weightBasedShippingRates;
    }

    /**
     * @param array $weightBasedShippingRates
     */
    public function setWeightBasedShippingRates($weightBasedShippingRates)
    {
        $this->weightBasedShippingRates = $weightBasedShippingRates;
    }
}
