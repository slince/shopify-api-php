<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\PriceRule;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;

class PriceRule extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $allocationMethod;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $customerSelection;

    /**
     * @var \DateTimeInterface
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
     * @var string
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
     *
     * @return PriceRule
     */
    public function setAllocationMethod($allocationMethod)
    {
        $this->allocationMethod = $allocationMethod;

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
     * @return PriceRule
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setCustomerSelection($customerSelection)
    {
        $this->customerSelection = $customerSelection;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * @param \DateTimeInterface $endsAt
     *
     * @return PriceRule
     */
    public function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setEntitledCollectionIds($entitledCollectionIds)
    {
        $this->entitledCollectionIds = $entitledCollectionIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setEntitledCountryIds($entitledCountryIds)
    {
        $this->entitledCountryIds = $entitledCountryIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setEntitledProductIds($entitledProductIds)
    {
        $this->entitledProductIds = $entitledProductIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setEntitledVariantIds($entitledVariantIds)
    {
        $this->entitledVariantIds = $entitledVariantIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getOncePerCustomer()
    {
        return $this->oncePerCustomer;
    }

    /**
     * @param boolean $oncePerCustomer
     *
     * @return PriceRule
     */
    public function setOncePerCustomer($oncePerCustomer)
    {
        $this->oncePerCustomer = $oncePerCustomer;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteCustomerIds($prerequisiteCustomerIds)
    {
        $this->prerequisiteCustomerIds = $prerequisiteCustomerIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteQuantityRange($prerequisiteQuantityRange)
    {
        $this->prerequisiteQuantityRange = $prerequisiteQuantityRange;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteSavedSearchIds($prerequisiteSavedSearchIds)
    {
        $this->prerequisiteSavedSearchIds = $prerequisiteSavedSearchIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteShippingPriceRange($prerequisiteShippingPriceRange)
    {
        $this->prerequisiteShippingPriceRange = $prerequisiteShippingPriceRange;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteSubtotalRange($prerequisiteSubtotalRange)
    {
        $this->prerequisiteSubtotalRange = $prerequisiteSubtotalRange;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @param string $startsAt
     *
     * @return PriceRule
     */
    public function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setTargetSelection($targetSelection)
    {
        $this->targetSelection = $targetSelection;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;

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
     * @return PriceRule
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setUsageLimit($usageLimit)
    {
        $this->usageLimit = $usageLimit;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteProductIds($prerequisiteProductIds)
    {
        $this->prerequisiteProductIds = $prerequisiteProductIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteVariantIds($prerequisiteVariantIds)
    {
        $this->prerequisiteVariantIds = $prerequisiteVariantIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteCollectionIds($prerequisiteCollectionIds)
    {
        $this->prerequisiteCollectionIds = $prerequisiteCollectionIds;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
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
     *
     * @return PriceRule
     */
    public function setPrerequisiteToEntitlementQuantityRatio($prerequisiteToEntitlementQuantityRatio)
    {
        $this->prerequisiteToEntitlementQuantityRatio = $prerequisiteToEntitlementQuantityRatio;

        return $this;
    }
}