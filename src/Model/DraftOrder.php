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

class DraftOrder extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var boolean
     */
    protected $taxesIncluded;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var DateTime
     */
    protected $invoiceSentAt;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @var boolean
     */
    protected $taxExempt;

    /**
     * @var DateTime
     */
    protected $completedAt;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var LineItem[]
     */
    protected $lineItems = [];

    /**
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @var Address
     */
    protected $billingAddress;

    /**
     * @var string
     */
    protected $invoiceUrl;

    /**
     * @var array
     */
    protected $appliedDiscount;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var array
     */
    protected $shippingLine;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $tags;

    /**
     * @var string
     */
    protected $noteAttributes;

    /**
     * @var float
     */
    protected $totalPrice;

    /**
     * @var float
     */
    protected $subtotalPrice;

    /**
     * @var float
     */
    protected $totalTax;

    /**
     * @var Customer
     */
    protected $customer;

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
    public function isTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

    /**
     * @param bool $taxesIncluded
     */
    public function setTaxesIncluded($taxesIncluded)
    {
        $this->taxesIncluded = $taxesIncluded;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return DateTime
     */
    public function getInvoiceSentAt()
    {
        return $this->invoiceSentAt;
    }

    /**
     * @param DateTime $invoiceSentAt
     */
    public function setInvoiceSentAt($invoiceSentAt)
    {
        $this->invoiceSentAt = $invoiceSentAt;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
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

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
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
     * @return DateTime
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * @param DateTime $completedAt
     */
    public function setCompletedAt($completedAt)
    {
        $this->completedAt = $completedAt;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return LineItem[]
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param LineItem[] $lineItems
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return string
     */
    public function getInvoiceUrl()
    {
        return $this->invoiceUrl;
    }

    /**
     * @param string $invoiceUrl
     */
    public function setInvoiceUrl($invoiceUrl)
    {
        $this->invoiceUrl = $invoiceUrl;
    }

    /**
     * @return array
     */
    public function getAppliedDiscount()
    {
        return $this->appliedDiscount;
    }

    /**
     * @param array $appliedDiscount
     */
    public function setAppliedDiscount($appliedDiscount)
    {
        $this->appliedDiscount = $appliedDiscount;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return array
     */
    public function getShippingLine()
    {
        return $this->shippingLine;
    }

    /**
     * @param array $shippingLine
     */
    public function setShippingLine($shippingLine)
    {
        $this->shippingLine = $shippingLine;
    }

    /**
     * @return array
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    /**
     * @param array $taxLines
     */
    public function setTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;
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
    public function getNoteAttributes()
    {
        return $this->noteAttributes;
    }

    /**
     * @param string $noteAttributes
     */
    public function setNoteAttributes($noteAttributes)
    {
        $this->noteAttributes = $noteAttributes;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return float
     */
    public function getSubtotalPrice()
    {
        return $this->subtotalPrice;
    }

    /**
     * @param float $subtotalPrice
     */
    public function setSubtotalPrice($subtotalPrice)
    {
        $this->subtotalPrice = $subtotalPrice;
    }

    /**
     * @return float
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * @param float $totalTax
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
}