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

class Customer extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var bool
     */
    protected $acceptsMarketing;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
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
     * @var Address[]
     */
    protected $addresses;

    /**
     * @var Address
     */
    protected $defaultAddress;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isAcceptsMarketing()
    {
        return $this->acceptsMarketing;
    }

    /**
     * @param bool $acceptsMarketing
     */
    public function setAcceptsMarketing($acceptsMarketing)
    {
        $this->acceptsMarketing = $acceptsMarketing;
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
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getOrdersCount()
    {
        return $this->ordersCount;
    }

    /**
     * @param int $ordersCount
     */
    public function setOrdersCount($ordersCount)
    {
        $this->ordersCount = $ordersCount;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return float
     */
    public function getTotalSpent()
    {
        return $this->totalSpent;
    }

    /**
     * @param float $totalSpent
     */
    public function setTotalSpent($totalSpent)
    {
        $this->totalSpent = $totalSpent;
    }

    /**
     * @return int
     */
    public function getLastOrderId()
    {
        return $this->lastOrderId;
    }

    /**
     * @param int $lastOrderId
     */
    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return bool
     */
    public function isVerifiedEmail()
    {
        return $this->verifiedEmail;
    }

    /**
     * @param bool $verifiedEmail
     */
    public function setVerifiedEmail($verifiedEmail)
    {
        $this->verifiedEmail = $verifiedEmail;
    }

    /**
     * @return string
     */
    public function getMultipassIdentifier()
    {
        return $this->multipassIdentifier;
    }

    /**
     * @param string $multipassIdentifier
     */
    public function setMultipassIdentifier($multipassIdentifier)
    {
        $this->multipassIdentifier = $multipassIdentifier;
    }

    /**
     * @return bool
     */
    public function isTaxExempt()
    {
        return $this->taxExempt;
    }

    /**
     * @param bool $taxExempt
     */
    public function setTaxExempt($taxExempt)
    {
        $this->taxExempt = $taxExempt;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getLastOrderName()
    {
        return $this->lastOrderName;
    }

    /**
     * @param string $lastOrderName
     */
    public function setLastOrderName($lastOrderName)
    {
        $this->lastOrderName = $lastOrderName;
    }

    /**
     * @return Address[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param Address[] $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @return Address
     */
    public function getDefaultAddress()
    {
        return $this->defaultAddress;
    }

    /**
     * @param Address $defaultAddress
     */
    public function setDefaultAddress($defaultAddress)
    {
        $this->defaultAddress = $defaultAddress;
    }
}
