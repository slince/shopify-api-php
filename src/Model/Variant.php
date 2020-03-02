<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ProductVariant;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;

class Variant extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var int
     */
    protected $productId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var int
     */
    protected $grams;

    /**
     * @var string
     */
    protected $inventoryPolicy;

    /**
     * @var string
     */
    protected $compareAtPrice;

    /**
     * @var string
     */
    protected $fulfillmentService;

    /**
     * @var string
     */
    protected $inventoryManagement;

    /**
     * @var string
     */
    protected $option1;

    /**
     * @var string
     */
    protected $option2;

    /**
     * @var string
     */
    protected $option3;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $taxable;

    /**
     * @var string
     */
    protected $barcode;

    /**
     * @var int
     */
    protected $imageId;

    /**
     * @var int
     */
    protected $inventoryQuantity;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var string
     */
    protected $weightUnit;

    /**
     * @var int
     */
    protected $inventoryItemId;

    /**
     * @var int
     */
    protected $oldInventoryQuantity;

    /**
     * @var bool
     */
    protected $requiresShipping;

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
     * @return Variant
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

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
     * @return Variant
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     *
     * @return Variant
     */
    public function setPrice($price)
    {
        $this->price = $price;

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
     * @return Variant
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return Variant
     */
    public function setPosition($position)
    {
        $this->position = $position;

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
     * @return Variant
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;

        return $this;
    }

    /**
     * @return string
     */
    public function getInventoryPolicy()
    {
        return $this->inventoryPolicy;
    }

    /**
     * @param string $inventoryPolicy
     *
     * @return Variant
     */
    public function setInventoryPolicy($inventoryPolicy)
    {
        $this->inventoryPolicy = $inventoryPolicy;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompareAtPrice()
    {
        return $this->compareAtPrice;
    }

    /**
     * @param string $compareAtPrice
     *
     * @return Variant
     */
    public function setCompareAtPrice($compareAtPrice)
    {
        $this->compareAtPrice = $compareAtPrice;

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
     * @return Variant
     */
    public function setFulfillmentService($fulfillmentService)
    {
        $this->fulfillmentService = $fulfillmentService;

        return $this;
    }

    /**
     * @return string
     */
    public function getInventoryManagement()
    {
        return $this->inventoryManagement;
    }

    /**
     * @param string $inventoryManagement
     *
     * @return Variant
     */
    public function setInventoryManagement($inventoryManagement)
    {
        $this->inventoryManagement = $inventoryManagement;

        return $this;
    }

    /**
     * @return string
     */
    public function getOption1()
    {
        return $this->option1;
    }

    /**
     * @param string $option1
     *
     * @return Variant
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;

        return $this;
    }

    /**
     * @return string
     */
    public function getOption2()
    {
        return $this->option2;
    }

    /**
     * @param string $option2
     *
     * @return Variant
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;

        return $this;
    }

    /**
     * @return string
     */
    public function getOption3()
    {
        return $this->option3;
    }

    /**
     * @param string $option3
     *
     * @return Variant
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;

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
     * @return Variant
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
     * @return Variant
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

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
     * @return Variant
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     *
     * @return Variant
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return int
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param int $imageId
     *
     * @return Variant
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * @return int
     */
    public function getInventoryQuantity()
    {
        return $this->inventoryQuantity;
    }

    /**
     * @param int $inventoryQuantity
     *
     * @return Variant
     */
    public function setInventoryQuantity($inventoryQuantity)
    {
        $this->inventoryQuantity = $inventoryQuantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return Variant
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     *
     * @return Variant
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;

        return $this;
    }

    /**
     * @param int $inventoryItemId
     */
    public function setInventoryItemId($inventoryItemId)
    {
        $this->inventoryItemId = $inventoryItemId;
    }

    /**
     * @return int
     */
    public function getInventoryItemId()
    {
        return $this->inventoryItemId;
    }

    /**
     * @return int
     */
    public function getOldInventoryQuantity()
    {
        return $this->oldInventoryQuantity;
    }

    /**
     * @param int $oldInventoryQuantity
     *
     * @return Variant
     */
    public function setOldInventoryQuantity($oldInventoryQuantity)
    {
        $this->oldInventoryQuantity = $oldInventoryQuantity;

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
     * @return Variant
     */
    public function setRequiresShipping($requiresShipping)
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }
}