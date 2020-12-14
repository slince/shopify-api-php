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

namespace Slince\Shopify\Model\MarketingEvent;

use Slince\Shopify\Model\MarketingEvent\Common\MarketedResource;

class MarketingEvent
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $eventType;

    /**
     * @var string
     */
    protected $remoteId;

    /**
     * @var \DateTimeInterface
     */
    protected $startedAt;

    /**
     * @var \DateTimeInterface
     */
    protected $endedAt;

    /**
     * @var \DateTimeInterface
     */
    protected $scheduledToEndAt;

    /**
     * @var string
     */
    protected $budget;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $manageUrl;

    /**
     * @var string
     */
    protected $previewUrl;

    /**
     * @var string
     */
    protected $utmCampaign;

    /**
     * @var string
     */
    protected $utmSource;

    /**
     * @var string
     */
    protected $utmMedium;

    /**
     * @var string
     */
    protected $budgetType;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $marketingChannel;

    /**
     * @var bool
     */
    protected $paid;

    /**
     * @var string
     */
    protected $referringDomain;

    /**
     * @var string
     */
    protected $breadcrumbId;

    /**
     * @var string
     */
    protected $marketingActivityId;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var MarketedResource[]
     */
    protected $marketedResources;

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
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * @param string $eventType
     */
    public function setEventType(string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * @return string
     */
    public function getRemoteId(): string
    {
        return $this->remoteId;
    }

    /**
     * @param string $remoteId
     */
    public function setRemoteId(string $remoteId): void
    {
        $this->remoteId = $remoteId;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartedAt(): \DateTimeInterface
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTimeInterface $startedAt
     */
    public function setStartedAt(\DateTimeInterface $startedAt): void
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndedAt(): \DateTimeInterface
    {
        return $this->endedAt;
    }

    /**
     * @param \DateTimeInterface $endedAt
     */
    public function setEndedAt(\DateTimeInterface $endedAt): void
    {
        $this->endedAt = $endedAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getScheduledToEndAt(): \DateTimeInterface
    {
        return $this->scheduledToEndAt;
    }

    /**
     * @param \DateTimeInterface $scheduledToEndAt
     */
    public function setScheduledToEndAt(\DateTimeInterface $scheduledToEndAt): void
    {
        $this->scheduledToEndAt = $scheduledToEndAt;
    }

    /**
     * @return string
     */
    public function getBudget(): string
    {
        return $this->budget;
    }

    /**
     * @param string $budget
     */
    public function setBudget(string $budget): void
    {
        $this->budget = $budget;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getManageUrl(): string
    {
        return $this->manageUrl;
    }

    /**
     * @param string $manageUrl
     */
    public function setManageUrl(string $manageUrl): void
    {
        $this->manageUrl = $manageUrl;
    }

    /**
     * @return string
     */
    public function getPreviewUrl(): string
    {
        return $this->previewUrl;
    }

    /**
     * @param string $previewUrl
     */
    public function setPreviewUrl(string $previewUrl): void
    {
        $this->previewUrl = $previewUrl;
    }

    /**
     * @return string
     */
    public function getUtmCampaign(): string
    {
        return $this->utmCampaign;
    }

    /**
     * @param string $utmCampaign
     */
    public function setUtmCampaign(string $utmCampaign): void
    {
        $this->utmCampaign = $utmCampaign;
    }

    /**
     * @return string
     */
    public function getUtmSource(): string
    {
        return $this->utmSource;
    }

    /**
     * @param string $utmSource
     */
    public function setUtmSource(string $utmSource): void
    {
        $this->utmSource = $utmSource;
    }

    /**
     * @return string
     */
    public function getUtmMedium(): string
    {
        return $this->utmMedium;
    }

    /**
     * @param string $utmMedium
     */
    public function setUtmMedium(string $utmMedium): void
    {
        $this->utmMedium = $utmMedium;
    }

    /**
     * @return string
     */
    public function getBudgetType(): string
    {
        return $this->budgetType;
    }

    /**
     * @param string $budgetType
     */
    public function setBudgetType(string $budgetType): void
    {
        $this->budgetType = $budgetType;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getMarketingChannel(): string
    {
        return $this->marketingChannel;
    }

    /**
     * @param string $marketingChannel
     */
    public function setMarketingChannel(string $marketingChannel): void
    {
        $this->marketingChannel = $marketingChannel;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     */
    public function setPaid(bool $paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return string
     */
    public function getReferringDomain(): string
    {
        return $this->referringDomain;
    }

    /**
     * @param string $referringDomain
     */
    public function setReferringDomain(string $referringDomain): void
    {
        $this->referringDomain = $referringDomain;
    }

    /**
     * @return string
     */
    public function getBreadcrumbId(): string
    {
        return $this->breadcrumbId;
    }

    /**
     * @param string $breadcrumbId
     */
    public function setBreadcrumbId(string $breadcrumbId): void
    {
        $this->breadcrumbId = $breadcrumbId;
    }

    /**
     * @return string
     */
    public function getMarketingActivityId(): string
    {
        return $this->marketingActivityId;
    }

    /**
     * @param string $marketingActivityId
     */
    public function setMarketingActivityId(string $marketingActivityId): void
    {
        $this->marketingActivityId = $marketingActivityId;
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
     * @return array
     */
    public function getMarketedResources(): array
    {
        return $this->marketedResources;
    }

    /**
     * @param array $marketedResources
     */
    public function setMarketedResources(array $marketedResources): void
    {
        $this->marketedResources = $marketedResources;
    }
}
