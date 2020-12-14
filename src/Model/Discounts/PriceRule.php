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

namespace Slince\Shopify\Model\Discounts;

class PriceRule
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $customerSelection;

    /**
     * @var string
     */
    protected $targetType;

    /**
     * @var string
     */
    protected $targetSelection;

    /**
     * @var string
     */
    protected $allocationMethod;

    /**
     * @var int
     */
    protected $allocationLimit;

    /**
     * @var bool
     */
    protected $oncePerCustomer;

    /**
     * @var int
     */
    protected $usageLimit;

    /**
     * @var \DateTimeInterface
     */
    protected $startsAt;

    /**
     * @var \DateTimeInterface
     */
    protected $endsAt;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var array<int>
     */
    protected $entitledProductIds;

    /**
     * @var array<int>
     */
    protected $entitledVariantIds;

    /**
     * @var array<int>
     */
    protected $entitledCollectionIds;

    /**
     * @var array<int>
     */
    protected $entitledCountryIds;

    /**
     * @var array<int>
     */
    protected $prerequisiteProductIds;

    /**
     * @var array<int>
     */
    protected $prerequisiteVariantIds;

    /**
     * @var array<int>
     */
    protected $prerequisiteCollectionIds;

    /**
     * @var array<int>
     */
    protected $prerequisiteSavedSearchIds;

    /**
     * @var array<int>
     */
    protected $prerequisiteCustomerIds;

    /**
     * @var array
     */
    protected $prerequisiteSubtotalRange;

    /**
     * @var array
     */
    protected $prerequisiteQuantityRange;

    /**
     * @var array
     */
    protected $prerequisiteShippingPriceRange;

    /**
     * @var array
     */
    protected $prerequisiteToEntitlementQuantityRatio;

    /**
     * @var array
     */
    protected $prerequisiteToEntitlementPurchase;

    /**
     * @var string
     */
    protected $title;

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
    public function getValueType(): string
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     */
    public function setValueType(string $valueType): void
    {
        $this->valueType = $valueType;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCustomerSelection(): string
    {
        return $this->customerSelection;
    }

    /**
     * @param string $customerSelection
     */
    public function setCustomerSelection(string $customerSelection): void
    {
        $this->customerSelection = $customerSelection;
    }

    /**
     * @return string
     */
    public function getTargetType(): string
    {
        return $this->targetType;
    }

    /**
     * @param string $targetType
     */
    public function setTargetType(string $targetType): void
    {
        $this->targetType = $targetType;
    }

    /**
     * @return string
     */
    public function getTargetSelection(): string
    {
        return $this->targetSelection;
    }

    /**
     * @param string $targetSelection
     */
    public function setTargetSelection(string $targetSelection): void
    {
        $this->targetSelection = $targetSelection;
    }

    /**
     * @return string
     */
    public function getAllocationMethod(): string
    {
        return $this->allocationMethod;
    }

    /**
     * @param string $allocationMethod
     */
    public function setAllocationMethod(string $allocationMethod): void
    {
        $this->allocationMethod = $allocationMethod;
    }

    /**
     * @return int
     */
    public function getAllocationLimit(): ?int
    {
        return $this->allocationLimit;
    }

    /**
     * @param int $allocationLimit
     */
    public function setAllocationLimit(int $allocationLimit): void
    {
        $this->allocationLimit = $allocationLimit;
    }

    /**
     * @return bool
     */
    public function isOncePerCustomer(): bool
    {
        return $this->oncePerCustomer;
    }

    /**
     * @param bool $oncePerCustomer
     */
    public function setOncePerCustomer(bool $oncePerCustomer): void
    {
        $this->oncePerCustomer = $oncePerCustomer;
    }

    /**
     * @return int
     */
    public function getUsageLimit(): ?int
    {
        return $this->usageLimit;
    }

    /**
     * @param int $usageLimit
     */
    public function setUsageLimit(int $usageLimit): void
    {
        $this->usageLimit = $usageLimit;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartsAt(): \DateTimeInterface
    {
        return $this->startsAt;
    }

    /**
     * @param \DateTimeInterface $startsAt
     */
    public function setStartsAt(\DateTimeInterface $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndsAt(): \DateTimeInterface
    {
        return $this->endsAt;
    }

    /**
     * @param \DateTimeInterface $endsAt
     */
    public function setEndsAt(\DateTimeInterface $endsAt): void
    {
        $this->endsAt = $endsAt;
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
    public function setCreatedAt(?\DateTimeInterface $createdAt): void
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
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return array
     */
    public function getEntitledProductIds(): array
    {
        return $this->entitledProductIds;
    }

    /**
     * @param array $entitledProductIds
     */
    public function setEntitledProductIds(array $entitledProductIds): void
    {
        $this->entitledProductIds = $entitledProductIds;
    }

    /**
     * @return array
     */
    public function getEntitledVariantIds(): array
    {
        return $this->entitledVariantIds;
    }

    /**
     * @param array $entitledVariantIds
     */
    public function setEntitledVariantIds(array $entitledVariantIds): void
    {
        $this->entitledVariantIds = $entitledVariantIds;
    }

    /**
     * @return array
     */
    public function getEntitledCollectionIds(): array
    {
        return $this->entitledCollectionIds;
    }

    /**
     * @param array $entitledCollectionIds
     */
    public function setEntitledCollectionIds(array $entitledCollectionIds): void
    {
        $this->entitledCollectionIds = $entitledCollectionIds;
    }

    /**
     * @return array
     */
    public function getEntitledCountryIds(): array
    {
        return $this->entitledCountryIds;
    }

    /**
     * @param array $entitledCountryIds
     */
    public function setEntitledCountryIds(array $entitledCountryIds): void
    {
        $this->entitledCountryIds = $entitledCountryIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteProductIds(): array
    {
        return $this->prerequisiteProductIds;
    }

    /**
     * @param array $prerequisiteProductIds
     */
    public function setPrerequisiteProductIds(array $prerequisiteProductIds): void
    {
        $this->prerequisiteProductIds = $prerequisiteProductIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteVariantIds(): array
    {
        return $this->prerequisiteVariantIds;
    }

    /**
     * @param array $prerequisiteVariantIds
     */
    public function setPrerequisiteVariantIds(array $prerequisiteVariantIds): void
    {
        $this->prerequisiteVariantIds = $prerequisiteVariantIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteCollectionIds(): array
    {
        return $this->prerequisiteCollectionIds;
    }

    /**
     * @param array $prerequisiteCollectionIds
     */
    public function setPrerequisiteCollectionIds(array $prerequisiteCollectionIds): void
    {
        $this->prerequisiteCollectionIds = $prerequisiteCollectionIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteSavedSearchIds(): array
    {
        return $this->prerequisiteSavedSearchIds;
    }

    /**
     * @param array $prerequisiteSavedSearchIds
     */
    public function setPrerequisiteSavedSearchIds(array $prerequisiteSavedSearchIds): void
    {
        $this->prerequisiteSavedSearchIds = $prerequisiteSavedSearchIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteCustomerIds(): array
    {
        return $this->prerequisiteCustomerIds;
    }

    /**
     * @param array $prerequisiteCustomerIds
     */
    public function setPrerequisiteCustomerIds(array $prerequisiteCustomerIds): void
    {
        $this->prerequisiteCustomerIds = $prerequisiteCustomerIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteSubtotalRange(): array
    {
        return $this->prerequisiteSubtotalRange;
    }

    /**
     * @param array $prerequisiteSubtotalRange
     */
    public function setPrerequisiteSubtotalRange(array $prerequisiteSubtotalRange): void
    {
        $this->prerequisiteSubtotalRange = $prerequisiteSubtotalRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteQuantityRange(): array
    {
        return $this->prerequisiteQuantityRange;
    }

    /**
     * @param array $prerequisiteQuantityRange
     */
    public function setPrerequisiteQuantityRange(array $prerequisiteQuantityRange): void
    {
        $this->prerequisiteQuantityRange = $prerequisiteQuantityRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteShippingPriceRange(): array
    {
        return $this->prerequisiteShippingPriceRange;
    }

    /**
     * @param array $prerequisiteShippingPriceRange
     */
    public function setPrerequisiteShippingPriceRange(array $prerequisiteShippingPriceRange): void
    {
        $this->prerequisiteShippingPriceRange = $prerequisiteShippingPriceRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteToEntitlementQuantityRatio(): array
    {
        return $this->prerequisiteToEntitlementQuantityRatio;
    }

    /**
     * @param array $prerequisiteToEntitlementQuantityRatio
     */
    public function setPrerequisiteToEntitlementQuantityRatio(array $prerequisiteToEntitlementQuantityRatio): void
    {
        $this->prerequisiteToEntitlementQuantityRatio = $prerequisiteToEntitlementQuantityRatio;
    }

    /**
     * @return array
     */
    public function getPrerequisiteToEntitlementPurchase(): array
    {
        return $this->prerequisiteToEntitlementPurchase;
    }

    /**
     * @param array $prerequisiteToEntitlementPurchase
     */
    public function setPrerequisiteToEntitlementPurchase(array $prerequisiteToEntitlementPurchase): void
    {
        $this->prerequisiteToEntitlementPurchase = $prerequisiteToEntitlementPurchase;
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
}
