<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Order;

use Slince\Shopify\Common\Model\Model;

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
     * @var array
     */
    protected $appliedDiscount;

    /**
     * @var bool
     */
    protected $custom;

    /**
     * @return bool
     */
    public function isCustom()
    {
        return $this->custom;
    }

    /**
     * @param bool $custom
     *
     * @return LineItem
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @return array
     */
    public function getAppliedDiscount()
    {
        return $this->appliedDiscount;
    }

    /**
     * @param array $appliedDiscount
     */
    public function setAppliedDiscount($appliedDiscount)
    {
        $this->appliedDiscount = $appliedDiscount;
    }

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
     * @return LineItem
     */
    public function setFulfillableQuantity($fulfillableQuantity)
    {
        $this->fulfillableQuantity = $fulfillableQuantity;

        return $this;
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
     * @return LineItem
     */
    public function setFulfillmentService($fulfillmentService)
    {
        $this->fulfillmentService = $fulfillmentService;

        return $this;
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
     * @return LineItem
     */
    public function setFulfillmentStatus($fulfillmentStatus)
    {
        $this->fulfillmentStatus = $fulfillmentStatus;

        return $this;
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
     * @return LineItem
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;

        return $this;
    }

    /**
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     *
     * @return LineItem
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
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
     * @return LineItem
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
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
     * @return LineItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
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
     * @return LineItem
     */
    public function setRequiresShipping($requiresShipping)
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
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
     * @return LineItem
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
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
     * @return LineItem
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * @return LineItem
     */
    public function setVariantId($variantId)
    {
        $this->variantId = $variantId;

        return $this;
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
     * @return LineItem
     */
    public function setVariantTitle($variantTitle)
    {
        $this->variantTitle = $variantTitle;

        return $this;
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
     * @return LineItem
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

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
     * @return LineItem
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * @return LineItem
     */
    public function setGiftCard($giftCard)
    {
        $this->giftCard = $giftCard;

        return $this;
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
     * @return LineItem
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
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
     * @return LineItem
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;

        return $this;
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
     * @return LineItem
     */
    public function setTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;

        return $this;
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
     * @return LineItem
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;

        return $this;
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
     * @return LineItem
     */
    public function setDiscountAllocations($discountAllocations)
    {
        $this->discountAllocations = $discountAllocations;

        return $this;
    }
}
