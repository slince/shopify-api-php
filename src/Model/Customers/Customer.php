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
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
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
     * @var \DateTimeInterface
     */
    protected $acceptsMarketingUpdatedAt;

    /**
     * @var string
     */
    protected $marketingOptInLevel;

    /**
     * @var array<string>
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
    public function setId(?int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isAcceptsMarketing(): ?bool
    {
        return $this->acceptsMarketing;
    }

    /**
     * @param bool $acceptsMarketing
     */
    public function setAcceptsMarketing(?bool $acceptsMarketing)
    {
        $this->acceptsMarketing = $acceptsMarketing;
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
    public function setCreatedAt(?\DateTimeInterface $createdAt)
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
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(?string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(?string $lastName)
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
    public function setOrdersCount(?int $ordersCount)
    {
        $this->ordersCount = $ordersCount;
    }

    /**
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(?string $state)
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
    public function setTotalSpent(float $totalSpent)
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
    public function setLastOrderId(?int $lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }

    /**
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(?string $note)
    {
        $this->note = $note;
    }

    /**
     * @return bool
     */
    public function isVerifiedEmail(): ?bool
    {
        return $this->verifiedEmail;
    }

    /**
     * @param bool $verifiedEmail
     */
    public function setVerifiedEmail(?bool $verifiedEmail)
    {
        $this->verifiedEmail = $verifiedEmail;
    }

    /**
     * @return string
     */
    public function getMultipassIdentifier(): ?string
    {
        return $this->multipassIdentifier;
    }

    /**
     * @param string $multipassIdentifier
     */
    public function setMultipassIdentifier(?string $multipassIdentifier)
    {
        $this->multipassIdentifier = $multipassIdentifier;
    }

    /**
     * @return bool
     */
    public function isTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    /**
     * @param bool $taxExempt
     */
    public function setTaxExempt(?bool $taxExempt)
    {
        $this->taxExempt = $taxExempt;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getTags(): ?string
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     */
    public function setTags(?string $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getLastOrderName(): ?string
    {
        return $this->lastOrderName;
    }

    /**
     * @param string $lastOrderName
     */
    public function setLastOrderName(?string $lastOrderName)
    {
        $this->lastOrderName = $lastOrderName;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(?string $currency)
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
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAcceptsMarketingUpdatedAt(): ?\DateTimeInterface
    {
        return $this->acceptsMarketingUpdatedAt;
    }

    /**
     * @param \DateTimeInterface $acceptsMarketingUpdatedAt
     */
    public function setAcceptsMarketingUpdatedAt(?\DateTimeInterface $acceptsMarketingUpdatedAt)
    {
        $this->acceptsMarketingUpdatedAt = $acceptsMarketingUpdatedAt;
    }

    /**
     * @return string
     */
    public function getMarketingOptInLevel(): ?string
    {
        return $this->marketingOptInLevel;
    }

    /**
     * @param string $marketingOptInLevel
     */
    public function setMarketingOptInLevel(?string $marketingOptInLevel)
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
    public function setTaxExemptions(array $taxExemptions)
    {
        $this->taxExemptions = $taxExemptions;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(?string $adminGraphqlApiId)
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
    public function setDefaultAddress(Address $defaultAddress)
    {
        $this->defaultAddress = $defaultAddress;
    }
}
