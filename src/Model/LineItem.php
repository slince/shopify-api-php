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

class LineItem extends Model
{
    /**
     * @var int
     */
    protected $fulfillableQuantity;

    /**
     * @var string
     */
    protected $fulfillmentService;

    /**
     * @var string
     */
    protected $fulfillmentStatus;

    /**
     * @var int
     */
    protected $grams;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var int
     */
    protected $productId;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var bool
     */
    protected $requiresShipping;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $variantId;

    /**
     * @var string
     */
    protected $variantTitle;

    /**
     * @var string
     */
    protected $vendor;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $giftCard;

    /**
     * @var array
     */
    protected $properties;

    /**
     * @var bool
     */
    protected $taxable;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var float
     */
    protected $totalDiscount;

    /**
     * @var DiscountAllocation[]
     */
    protected $discountAllocations;

    /**
     * @return int
     */
    public function getFulfillableQuantity()
    {
        return $this->fulfillableQuantity;
    }

    /**
     * @param int $fulfillableQuantity
     *

     */
    public function setFulfillableQuantity($fulfillableQuantity)
    {
        $this->fulfillableQuantity = $fulfillableQuantity;
    }

    /**
     * @return string
     */
    public function getFulfillmentService()
    {
        return $this->fulfillmentService;
    }

    /**
     * @param string $fulfillmentService
     *

     */
    public function setFulfillmentService($fulfillmentService)
    {
        $this->fulfillmentService = $fulfillmentService;
    }

    /**
     * @return string
     */
    public function getFulfillmentStatus()
    {
        return $this->fulfillmentStatus;
    }

    /**
     * @param string $fulfillmentStatus
     *

     */
    public function setFulfillmentStatus($fulfillmentStatus)
    {
        $this->fulfillmentStatus = $fulfillmentStatus;
    }

    /**
     * @return int
     */
    public function getGrams()
    {
        return $this->grams;
    }

    /**
     * @param int $grams
     *

     */
    public function setGrams($grams)
    {
        $this->grams = $grams;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     *

     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     *

     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *

     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return bool
     */
    public function isRequiresShipping()
    {
        return $this->requiresShipping;
    }

    /**
     * @param bool $requiresShipping
     *

     */
    public function setRequiresShipping($requiresShipping)
    {
        $this->requiresShipping = $requiresShipping;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     *

     */
    public function setSku($sku)
    {
        $this->sku = $sku;
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
     *

     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @param int $variantId
     *

     */
    public function setVariantId($variantId)
    {
        $this->variantId = $variantId;
    }

    /**
     * @return string
     */
    public function getVariantTitle()
    {
        return $this->variantTitle;
    }

    /**
     * @param string $variantTitle
     *

     */
    public function setVariantTitle($variantTitle)
    {
        $this->variantTitle = $variantTitle;
    }

    /**
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param string $vendor
     *

     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
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

     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isGiftCard()
    {
        return $this->giftCard;
    }

    /**
     * @param bool $giftCard
     *

     */
    public function setGiftCard($giftCard)
    {
        $this->giftCard = $giftCard;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param array $properties
     *

     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * @return bool
     */
    public function isTaxable()
    {
        return $this->taxable;
    }

    /**
     * @param bool $taxable
     *

     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    /**
     * @param TaxLine[] $taxLines
     *

     */
    public function setTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;
    }

    /**
     * @return float
     */
    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }

    /**
     * @param float $totalDiscount
     *

     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;
    }

    /**
     * @return DiscountAllocation[]
     */
    public function getDiscountAllocations()
    {
        return $this->discountAllocations;
    }

    /**
     * @param DiscountAllocation[] $discountAllocations
     *
     */
    public function setDiscountAllocations($discountAllocations)
    {
        $this->discountAllocations = $discountAllocations;
    }

    /**
     * @param DiscountAllocation $discountAllocation
     */
    public function addDiscountAllocation(DiscountAllocation $discountAllocation)
    {
        $this->discountAllocations[] = $discountAllocation;
    }
}
