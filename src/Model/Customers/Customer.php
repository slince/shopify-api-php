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

namespace Slince\Shopify\Model\Customers;

use \DateTimeInterface;

class Customer
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var bool
     */
    protected $acceptsMarketing;

    /**
     * @var DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var int
     */
    protected $ordersCount;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var float
     */
    protected $totalSpent;

    /**
     * @var int
     */
    protected $lastOrderId;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var bool
     */
    protected $verifiedEmail;

    /**
     * @var string
     */
    protected $multipassIdentifier;

    /**
     * @var bool
     */
    protected $taxExempt;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $tags;

    /**
     * @var string
     */
    protected $lastOrderName;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var Address[]
     */
    protected $addresses;

    /**
     * @var DateTimeInterface
     */
    protected $acceptsMarketingUpdatedAt;

    /**
     * @var string
     */
    protected $marketingOptInLevel;

    /**
     * @var array
     */
    protected $taxExemptions;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var Address
     */
    protected $defaultAddress;

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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isAcceptsMarketing(): bool
    {
        return $this->acceptsMarketing;
    }

    /**
     * @param bool $acceptsMarketing
     */
    public function setAcceptsMarketing(bool $acceptsMarketing): void
    {
        $this->acceptsMarketing = $acceptsMarketing;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $createdAt
     */
    public function setCreatedAt(?DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(?DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getOrdersCount(): ?int
    {
        return $this->ordersCount;
    }

    /**
     * @param int $ordersCount
     */
    public function setOrdersCount(int $ordersCount): void
    {
        $this->ordersCount = $ordersCount;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return float
     */
    public function getTotalSpent(): float
    {
        return $this->totalSpent;
    }

    /**
     * @param float $totalSpent
     */
    public function setTotalSpent(float $totalSpent): void
    {
        $this->totalSpent = $totalSpent;
    }

    /**
     * @return int
     */
    public function getLastOrderId(): ?int
    {
        return $this->lastOrderId;
    }

    /**
     * @param int $lastOrderId
     */
    public function setLastOrderId(int $lastOrderId): void
    {
        $this->lastOrderId = $lastOrderId;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    /**
     * @return bool
     */
    public function isVerifiedEmail(): bool
    {
        return $this->verifiedEmail;
    }

    /**
     * @param bool $verifiedEmail
     */
    public function setVerifiedEmail(bool $verifiedEmail): void
    {
        $this->verifiedEmail = $verifiedEmail;
    }

    /**
     * @return string
     */
    public function getMultipassIdentifier(): string
    {
        return $this->multipassIdentifier;
    }

    /**
     * @param string $multipassIdentifier
     */
    public function setMultipassIdentifier(string $multipassIdentifier): void
    {
        $this->multipassIdentifier = $multipassIdentifier;
    }

    /**
     * @return bool
     */
    public function isTaxExempt(): bool
    {
        return $this->taxExempt;
    }

    /**
     * @param bool $taxExempt
     */
    public function setTaxExempt(bool $taxExempt): void
    {
        $this->taxExempt = $taxExempt;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getTags(): string
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     */
    public function setTags(string $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getLastOrderName(): string
    {
        return $this->lastOrderName;
    }

    /**
     * @param string $lastOrderName
     */
    public function setLastOrderName(string $lastOrderName): void
    {
        $this->lastOrderName = $lastOrderName;
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
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param Address[] $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @return DateTimeInterface
     */
    public function getAcceptsMarketingUpdatedAt(): DateTimeInterface
    {
        return $this->acceptsMarketingUpdatedAt;
    }

    /**
     * @param DateTimeInterface $acceptsMarketingUpdatedAt
     */
    public function setAcceptsMarketingUpdatedAt(DateTimeInterface $acceptsMarketingUpdatedAt): void
    {
        $this->acceptsMarketingUpdatedAt = $acceptsMarketingUpdatedAt;
    }

    /**
     * @return string
     */
    public function getMarketingOptInLevel(): string
    {
        return $this->marketingOptInLevel;
    }

    /**
     * @param string $marketingOptInLevel
     */
    public function setMarketingOptInLevel(string $marketingOptInLevel): void
    {
        $this->marketingOptInLevel = $marketingOptInLevel;
    }

    /**
     * @return array
     */
    public function getTaxExemptions(): array
    {
        return $this->taxExemptions;
    }

    /**
     * @param array $taxExemptions
     */
    public function setTaxExemptions(array $taxExemptions): void
    {
        $this->taxExemptions = $taxExemptions;
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
     * @return Address
     */
    public function getDefaultAddress(): Address
    {
        return $this->defaultAddress;
    }

    /**
     * @param Address $defaultAddress
     */
    public function setDefaultAddress(Address $defaultAddress): void
    {
        $this->defaultAddress = $defaultAddress;
    }
}
