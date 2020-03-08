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

class ShippingLine extends Model
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $carrierIdentifier;

    /**
     * @var string
     */
    protected $requestedFulfillmentServiceId;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    /**
     * @param array $taxLines
     */
    public function setTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;
    }

    /**
     * @param array $taxLines
     */
    public function addTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;
    }

    public function addTaxLine(TaxLine $taxLine)
    {
        $this->taxLines[] = $taxLine;
    }

    /**
     * @return string
     */
    public function getCarrierIdentifier()
    {
        return $this->carrierIdentifier;
    }

    /**
     * @param string $carrierIdentifier
     */
    public function setCarrierIdentifier($carrierIdentifier)
    {
        $this->carrierIdentifier = $carrierIdentifier;
    }

    /**
     * @return string
     */
    public function getRequestedFulfillmentServiceId()
    {
        return $this->requestedFulfillmentServiceId;
    }

    /**
     * @param string $requestedFulfillmentServiceId
     */
    public function setRequestedFulfillmentServiceId($requestedFulfillmentServiceId)
    {
        $this->requestedFulfillmentServiceId = $requestedFulfillmentServiceId;
    }
}
