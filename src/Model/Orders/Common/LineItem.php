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

namespace Slince\Shopify\Model\Orders\Common;

use Slince\Shopify\Model\Common\PriceSet;

class LineItem
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $variantId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $sku;

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
    protected $fulfillmentService;

    /**
     * @var int
     */
    protected $productId;

    /**
     * @var bool
     */
    protected $requiresShipping;

    /**
     * @var bool
     */
    protected $taxable;

    /**
     * @var bool
     */
    protected $giftCard;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $variantInventoryManagement;

    /**
     * @var LineItemProperty[]
     */
    protected $properties;

    /**
     * @var bool
     */
    protected $productExists;

    /**
     * @var int
     */
    protected $fulfillableQuantity;

    /**
     * @var int
     */
    protected $grams;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var string
     */
    protected $totalDiscount;

    /**
     * @var string
     */
    protected $fulfillmentStatus;

    /**
     * @var PriceSet
     */
    protected $priceSet;

    /**
     * @var PriceSet
     */
    protected $totalDiscountSet;

    /**
     * @var DiscountAllocation[]
     */
    protected $discountAllocations;

    /**
     * @var LineItemLocation
     */
    protected $originLocation;

    /**
     * @var LineItemDuty[]
     */
    protected $duties;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

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
    public function getVariantId(): ?int
    {
        return $this->variantId;
    }

    /**
     * @param int $variantId
     */
    public function setVariantId(int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getVariantTitle(): string
    {
        return $this->variantTitle;
    }

    /**
     * @param string $variantTitle
     */
    public function setVariantTitle(string $variantTitle): void
    {
        $this->variantTitle = $variantTitle;
    }

    /**
     * @return string
     */
    public function getVendor(): string
    {
        return $this->vendor;
    }

    /**
     * @param string $vendor
     */
    public function setVendor(string $vendor): void
    {
        $this->vendor = $vendor;
    }

    /**
     * @return string
     */
    public function getFulfillmentService(): string
    {
        return $this->fulfillmentService;
    }

    /**
     * @param string $fulfillmentService
     */
    public function setFulfillmentService(string $fulfillmentService): void
    {
        $this->fulfillmentService = $fulfillmentService;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return bool
     */
    public function isRequiresShipping(): bool
    {
        return $this->requiresShipping;
    }

    /**
     * @param bool $requiresShipping
     */
    public function setRequiresShipping(bool $requiresShipping): void
    {
        $this->requiresShipping = $requiresShipping;
    }

    /**
     * @return bool
     */
    public function isTaxable(): bool
    {
        return $this->taxable;
    }

    /**
     * @param bool $taxable
     */
    public function setTaxable(bool $taxable): void
    {
        $this->taxable = $taxable;
    }

    /**
     * @return bool
     */
    public function isGiftCard(): bool
    {
        return $this->giftCard;
    }

    /**
     * @param bool $giftCard
     */
    public function setGiftCard(bool $giftCard): void
    {
        $this->giftCard = $giftCard;
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
    public function getVariantInventoryManagement(): string
    {
        return $this->variantInventoryManagement;
    }

    /**
     * @param string $variantInventoryManagement
     */
    public function setVariantInventoryManagement(string $variantInventoryManagement): void
    {
        $this->variantInventoryManagement = $variantInventoryManagement;
    }

    /**
     * @return LineItemProperty[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @param LineItemProperty[] $properties
     */
    public function setProperties(array $properties): void
    {
        $this->properties = $properties;
    }

    /**
     * @return bool
     */
    public function isProductExists(): bool
    {
        return $this->productExists;
    }

    /**
     * @param bool $productExists
     */
    public function setProductExists(bool $productExists): void
    {
        $this->productExists = $productExists;
    }

    /**
     * @return int
     */
    public function getFulfillableQuantity(): ?int
    {
        return $this->fulfillableQuantity;
    }

    /**
     * @param int $fulfillableQuantity
     */
    public function setFulfillableQuantity(int $fulfillableQuantity): void
    {
        $this->fulfillableQuantity = $fulfillableQuantity;
    }

    /**
     * @return int
     */
    public function getGrams(): ?int
    {
        return $this->grams;
    }

    /**
     * @param int $grams
     */
    public function setGrams(int $grams): void
    {
        $this->grams = $grams;
    }

    /**
     * @return string
     */
    public function getPrice(): string
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
     * @return string
     */
    public function getTotalDiscount(): string
    {
        return $this->totalDiscount;
    }

    /**
     * @param string $totalDiscount
     */
    public function setTotalDiscount(string $totalDiscount): void
    {
        $this->totalDiscount = $totalDiscount;
    }

    /**
     * @return string
     */
    public function getFulfillmentStatus(): string
    {
        return $this->fulfillmentStatus;
    }

    /**
     * @param string $fulfillmentStatus
     */
    public function setFulfillmentStatus(string $fulfillmentStatus): void
    {
        $this->fulfillmentStatus = $fulfillmentStatus;
    }

    /**
     * @return PriceSet
     */
    public function getPriceSet(): PriceSet
    {
        return $this->priceSet;
    }

    /**
     * @param PriceSet $priceSet
     */
    public function setPriceSet(PriceSet $priceSet): void
    {
        $this->priceSet = $priceSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalDiscountSet(): PriceSet
    {
        return $this->totalDiscountSet;
    }

    /**
     * @param PriceSet $totalDiscountSet
     */
    public function setTotalDiscountSet(PriceSet $totalDiscountSet): void
    {
        $this->totalDiscountSet = $totalDiscountSet;
    }

    /**
     * @return DiscountAllocation[]
     */
    public function getDiscountAllocations(): array
    {
        return $this->discountAllocations;
    }

    /**
     * @param DiscountAllocation[] $discountAllocations
     */
    public function setDiscountAllocations(array $discountAllocations): void
    {
        $this->discountAllocations = $discountAllocations;
    }

    /**
     * @return LineItemLocation
     */
    public function getOriginLocation(): LineItemLocation
    {
        return $this->originLocation;
    }

    /**
     * @param LineItemLocation $originLocation
     */
    public function setOriginLocation(LineItemLocation $originLocation): void
    {
        $this->originLocation = $originLocation;
    }

    /**
     * @return LineItemDuty[]
     */
    public function getDuties(): array
    {
        return $this->duties;
    }

    /**
     * @param LineItemDuty[] $duties
     */
    public function setDuties(array $duties): void
    {
        $this->duties = $duties;
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
     * @return TaxLine[]
     */
    public function getTaxLines(): array
    {
        return $this->taxLines;
    }

    /**
     * @param TaxLine[] $taxLines
     */
    public function setTaxLines(array $taxLines): void
    {
        $this->taxLines = $taxLines;
    }
}
