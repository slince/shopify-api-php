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

namespace Slince\Shopify\Model\Products;

class Variant
{
    /**
     * @var int
     */
    protected $id;

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
     * @var string
     */
    protected $adminGraphqlApiId;

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
    public function getAdminGraphqlApiId(): string
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(string $adminGraphqlApiId): void
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
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
      */
    public function setProductId($productId)
    {
        $this->productId = $productId;
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
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
      */
    public function setSku($sku)
    {
        $this->sku = $sku;
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
      */
    public function setPosition($position)
    {
        $this->position = $position;
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
      */
    public function setGrams($grams)
    {
        $this->grams = $grams;
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
      */
    public function setInventoryPolicy($inventoryPolicy)
    {
        $this->inventoryPolicy = $inventoryPolicy;
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
      */
    public function setCompareAtPrice($compareAtPrice)
    {
        $this->compareAtPrice = $compareAtPrice;
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
      */
    public function setFulfillmentService($fulfillmentService)
    {
        $this->fulfillmentService = $fulfillmentService;
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
      */
    public function setInventoryManagement($inventoryManagement)
    {
        $this->inventoryManagement = $inventoryManagement;
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
      */
    public function setOption1($option1)
    {
        $this->option1 = $option1;
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
      */
    public function setOption2($option2)
    {
        $this->option2 = $option2;
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
      */
    public function setOption3($option3)
    {
        $this->option3 = $option3;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
      */
    public function setCreatedAt(\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
      */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
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
      */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
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
      */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
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
      */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
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
      */
    public function setInventoryQuantity($inventoryQuantity)
    {
        $this->inventoryQuantity = $inventoryQuantity;
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
      */
    public function setWeight($weight)
    {
        $this->weight = $weight;
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
      */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
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
      */
    public function setOldInventoryQuantity($oldInventoryQuantity)
    {
        $this->oldInventoryQuantity = $oldInventoryQuantity;
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
      */
    public function setRequiresShipping($requiresShipping)
    {
        $this->requiresShipping = $requiresShipping;
    }
}
