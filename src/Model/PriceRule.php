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

use DateTime;

class PriceRule extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $allocationMethod;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $customerSelection;

    /**
     * @var DateTime
     */
    protected $endsAt;

    /**
     * @var array
     */
    protected $entitledCollectionIds;

    /**
     * @var array
     */
    protected $entitledCountryIds;

    /**
     * @var array
     */
    protected $entitledProductIds;

    /**
     * @var array
     */
    protected $entitledVariantIds;

    /**
     * @var string
     */
    protected $oncePerCustomer;

    /**
     * @var array
     */
    protected $prerequisiteCustomerIds;

    /**
     * @var array
     */
    protected $prerequisiteQuantityRange;

    /**
     * @var array
     */
    protected $prerequisiteSavedSearchIds;

    /**
     * @var array
     */
    protected $prerequisiteShippingPriceRange;

    /**
     * @var array
     */
    protected $prerequisiteSubtotalRange;

    /**
     * @var DateTime
     */
    protected $startsAt;

    /**
     * @var string
     */
    protected $targetSelection;

    /**
     * @var string
     */
    protected $targetType;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $usageLimit;

    /**
     * @var array
     */
    protected $prerequisiteProductIds;

    /**
     * @var array
     */
    protected $prerequisiteVariantIds;

    /**
     * @var array
     */
    protected $prerequisiteCollectionIds;

    /**
     * @var int
     */
    protected $value;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var array
     */
    protected $prerequisiteToEntitlementQuantityRatio;

    /**
     * @return string
     */
    public function getAllocationMethod()
    {
        return $this->allocationMethod;
    }

    /**
     * @param string $allocationMethod
     */
    public function setAllocationMethod($allocationMethod)
    {
        $this->allocationMethod = $allocationMethod;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCustomerSelection()
    {
        return $this->customerSelection;
    }

    /**
     * @param string $customerSelection
     */
    public function setCustomerSelection($customerSelection)
    {
        $this->customerSelection = $customerSelection;
    }

    /**
     * @return DateTime
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * @param DateTime $endsAt
     */
    public function setEndsAt(DateTime $endsAt)
    {
        $this->endsAt = $endsAt;
    }

    /**
     * @return array
     */
    public function getEntitledCollectionIds()
    {
        return $this->entitledCollectionIds;
    }

    /**
     * @param array $entitledCollectionIds
     */
    public function setEntitledCollectionIds($entitledCollectionIds)
    {
        $this->entitledCollectionIds = $entitledCollectionIds;
    }

    /**
     * @return array
     */
    public function getEntitledCountryIds()
    {
        return $this->entitledCountryIds;
    }

    /**
     * @param array $entitledCountryIds
     */
    public function setEntitledCountryIds($entitledCountryIds)
    {
        $this->entitledCountryIds = $entitledCountryIds;
    }

    /**
     * @return array
     */
    public function getEntitledProductIds()
    {
        return $this->entitledProductIds;
    }

    /**
     * @param array $entitledProductIds
     */
    public function setEntitledProductIds($entitledProductIds)
    {
        $this->entitledProductIds = $entitledProductIds;
    }

    /**
     * @return array
     */
    public function getEntitledVariantIds()
    {
        return $this->entitledVariantIds;
    }

    /**
     * @param array $entitledVariantIds
     */
    public function setEntitledVariantIds($entitledVariantIds)
    {
        $this->entitledVariantIds = $entitledVariantIds;
    }

    /**
     * @return string
     */
    public function getOncePerCustomer()
    {
        return $this->oncePerCustomer;
    }

    /**
     * @param bool $oncePerCustomer
     */
    public function setOncePerCustomer($oncePerCustomer)
    {
        $this->oncePerCustomer = $oncePerCustomer;
    }

    /**
     * @return array
     */
    public function getPrerequisiteCustomerIds()
    {
        return $this->prerequisiteCustomerIds;
    }

    /**
     * @param array $prerequisiteCustomerIds
     */
    public function setPrerequisiteCustomerIds($prerequisiteCustomerIds)
    {
        $this->prerequisiteCustomerIds = $prerequisiteCustomerIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteQuantityRange()
    {
        return $this->prerequisiteQuantityRange;
    }

    /**
     * @param array $prerequisiteQuantityRange
     */
    public function setPrerequisiteQuantityRange($prerequisiteQuantityRange)
    {
        $this->prerequisiteQuantityRange = $prerequisiteQuantityRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteSavedSearchIds()
    {
        return $this->prerequisiteSavedSearchIds;
    }

    /**
     * @param array $prerequisiteSavedSearchIds
     */
    public function setPrerequisiteSavedSearchIds($prerequisiteSavedSearchIds)
    {
        $this->prerequisiteSavedSearchIds = $prerequisiteSavedSearchIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteShippingPriceRange()
    {
        return $this->prerequisiteShippingPriceRange;
    }

    /**
     * @param array $prerequisiteShippingPriceRange
     */
    public function setPrerequisiteShippingPriceRange($prerequisiteShippingPriceRange)
    {
        $this->prerequisiteShippingPriceRange = $prerequisiteShippingPriceRange;
    }

    /**
     * @return array
     */
    public function getPrerequisiteSubtotalRange()
    {
        return $this->prerequisiteSubtotalRange;
    }

    /**
     * @param array $prerequisiteSubtotalRange
     */
    public function setPrerequisiteSubtotalRange($prerequisiteSubtotalRange)
    {
        $this->prerequisiteSubtotalRange = $prerequisiteSubtotalRange;
    }

    /**
     * @return DateTime
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @param DateTime $startsAt
     */
    public function setStartsAt(DateTime $startsAt)
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @return string
     */
    public function getTargetSelection()
    {
        return $this->targetSelection;
    }

    /**
     * @param string $targetSelection
     */
    public function setTargetSelection($targetSelection)
    {
        $this->targetSelection = $targetSelection;
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * @param string $targetType
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;
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
     * @return string
     */
    public function getUsageLimit()
    {
        return $this->usageLimit;
    }

    /**
     * @param string $usageLimit
     */
    public function setUsageLimit($usageLimit)
    {
        $this->usageLimit = $usageLimit;
    }

    /**
     * @return array
     */
    public function getPrerequisiteProductIds()
    {
        return $this->prerequisiteProductIds;
    }

    /**
     * @param array $prerequisiteProductIds
     */
    public function setPrerequisiteProductIds($prerequisiteProductIds)
    {
        $this->prerequisiteProductIds = $prerequisiteProductIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteVariantIds()
    {
        return $this->prerequisiteVariantIds;
    }

    /**
     * @param array $prerequisiteVariantIds
     */
    public function setPrerequisiteVariantIds($prerequisiteVariantIds)
    {
        $this->prerequisiteVariantIds = $prerequisiteVariantIds;
    }

    /**
     * @return array
     */
    public function getPrerequisiteCollectionIds()
    {
        return $this->prerequisiteCollectionIds;
    }

    /**
     * @param array $prerequisiteCollectionIds
     */
    public function setPrerequisiteCollectionIds($prerequisiteCollectionIds)
    {
        $this->prerequisiteCollectionIds = $prerequisiteCollectionIds;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    }

    /**
     * @return array
     */
    public function getPrerequisiteToEntitlementQuantityRatio()
    {
        return $this->prerequisiteToEntitlementQuantityRatio;
    }

    /**
     * @param array $prerequisiteToEntitlementQuantityRatio
     */
    public function setPrerequisiteToEntitlementQuantityRatio($prerequisiteToEntitlementQuantityRatio)
    {
        $this->prerequisiteToEntitlementQuantityRatio = $prerequisiteToEntitlementQuantityRatio;
    }
}
