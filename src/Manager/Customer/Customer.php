<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Customer;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;
use Slince\Shopify\Manager\CustomerAddress\Address;

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
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     *
     * @return Customer
     */
    public function setAcceptsMarketing($acceptsMarketing)
    {
        $this->acceptsMarketing = $acceptsMarketing;

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
     * @return Customer
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
     * @return Customer
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
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
     *
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
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
     *
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
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
     *
     * @return Customer
     */
    public function setOrdersCount($ordersCount)
    {
        $this->ordersCount = $ordersCount;

        return $this;
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
     *
     * @return Customer
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
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
     *
     * @return Customer
     */
    public function setTotalSpent($totalSpent)
    {
        $this->totalSpent = $totalSpent;

        return $this;
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
     *
     * @return Customer
     */
    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;

        return $this;
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
     *
     * @return Customer
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
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
     *
     * @return Customer
     */
    public function setVerifiedEmail($verifiedEmail)
    {
        $this->verifiedEmail = $verifiedEmail;

        return $this;
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
     *
     * @return Customer
     */
    public function setMultipassIdentifier($multipassIdentifier)
    {
        $this->multipassIdentifier = $multipassIdentifier;

        return $this;
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
     *
     * @return Customer
     */
    public function setTaxExempt($taxExempt)
    {
        $this->taxExempt = $taxExempt;

        return $this;
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
     *
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
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
     *
     * @return Customer
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
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
     *
     * @return Customer
     */
    public function setLastOrderName($lastOrderName)
    {
        $this->lastOrderName = $lastOrderName;

        return $this;
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
     *
     * @return Customer
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;

        return $this;
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
     *
     * @return Customer
     */
    public function setDefaultAddress($defaultAddress)
    {
        $this->defaultAddress = $defaultAddress;

        return $this;
    }
}
