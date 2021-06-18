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
namespace Slince\Shopify\Model\Orders;

use Slince\Shopify\Model\Customers\Customer;
use Slince\Shopify\Model\Orders\Common\AppliedDiscount;
use Slince\Shopify\Model\Orders\Common\DraftOrderShippingLine;
use Slince\Shopify\Model\Orders\Common\LineItem;
use Slince\Shopify\Model\Orders\Common\NoteAttribute;
use Slince\Shopify\Model\Orders\Common\OrderAddress;
use Slince\Shopify\Model\Orders\Common\TaxLine;

class DraftOrder
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var bool
     */
    protected $taxesIncluded;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var \DateTimeInterface
     */
    protected $invoiceSentAt;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $taxExempt;

    /**
     * @var \DateTimeInterface
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
    protected $lineItems;

    /**
     * @var OrderAddress
     */
    protected $shippingAddress;

    /**
     * @var OrderAddress
     */
    protected $billingAddress;

    /**
     * @var string
     */
    protected $invoiceUrl;

    /**
     * @var AppliedDiscount
     */
    protected $appliedDiscount;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var DraftOrderShippingLine
     */
    protected $shippingLine;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var NoteAttribute
     */
    protected $noteAttributes;

    /**
     * @var string
     */
    protected $totalPrice;

    /**
     * @var string
     */
    protected $subtotalPrice;

    /**
     * @var string
     */
    protected $totalTax;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var Customer
     */
    protected $customer;

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
    public function isTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    /**
     * @param bool $taxesIncluded
     */
    public function setTaxesIncluded(?bool $taxesIncluded)
    {
        $this->taxesIncluded = $taxesIncluded;
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
     * @return \DateTimeInterface
     */
    public function getInvoiceSentAt(): \DateTimeInterface
    {
        return $this->invoiceSentAt;
    }

    /**
     * @param \DateTimeInterface $invoiceSentAt
     */
    public function setInvoiceSentAt(\DateTimeInterface $invoiceSentAt)
    {
        $this->invoiceSentAt = $invoiceSentAt;
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
     * @return \DateTimeInterface
     */
    public function getCompletedAt(): \DateTimeInterface
    {
        return $this->completedAt;
    }

    /**
     * @param \DateTimeInterface $completedAt
     */
    public function setCompletedAt(\DateTimeInterface $completedAt)
    {
        $this->completedAt = $completedAt;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(?string $status)
    {
        $this->status = $status;
    }

    /**
     * @return LineItem[]
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }

    /**
     * @param LineItem[] $lineItems
     */
    public function setLineItems(array $lineItems)
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @return OrderAddress
     */
    public function getShippingAddress(): OrderAddress
    {
        return $this->shippingAddress;
    }

    /**
     * @param OrderAddress $shippingAddress
     */
    public function setShippingAddress(OrderAddress $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return OrderAddress
     */
    public function getBillingAddress(): OrderAddress
    {
        return $this->billingAddress;
    }

    /**
     * @param OrderAddress $billingAddress
     */
    public function setBillingAddress(OrderAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return string
     */
    public function getInvoiceUrl(): ?string
    {
        return $this->invoiceUrl;
    }

    /**
     * @param string $invoiceUrl
     */
    public function setInvoiceUrl(?string $invoiceUrl)
    {
        $this->invoiceUrl = $invoiceUrl;
    }

    /**
     * @return AppliedDiscount
     */
    public function getAppliedDiscount(): AppliedDiscount
    {
        return $this->appliedDiscount;
    }

    /**
     * @param AppliedDiscount $appliedDiscount
     */
    public function setAppliedDiscount(AppliedDiscount $appliedDiscount)
    {
        $this->appliedDiscount = $appliedDiscount;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(?int $orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return DraftOrderShippingLine
     */
    public function getShippingLine(): DraftOrderShippingLine
    {
        return $this->shippingLine;
    }

    /**
     * @param DraftOrderShippingLine $shippingLine
     */
    public function setShippingLine(DraftOrderShippingLine $shippingLine)
    {
        $this->shippingLine = $shippingLine;
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
    public function setTaxLines(array $taxLines)
    {
        $this->taxLines = $taxLines;
    }

    /**
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     */
    public function setTag(?string $tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return NoteAttribute
     */
    public function getNoteAttributes(): NoteAttribute
    {
        return $this->noteAttributes;
    }

    /**
     * @param NoteAttribute $noteAttributes
     */
    public function setNoteAttributes(NoteAttribute $noteAttributes)
    {
        $this->noteAttributes = $noteAttributes;
    }

    /**
     * @return string
     */
    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }

    /**
     * @param string $totalPrice
     */
    public function setTotalPrice(?string $totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return string
     */
    public function getSubtotalPrice(): ?string
    {
        return $this->subtotalPrice;
    }

    /**
     * @param string $subtotalPrice
     */
    public function setSubtotalPrice(?string $subtotalPrice)
    {
        $this->subtotalPrice = $subtotalPrice;
    }

    /**
     * @return string
     */
    public function getTotalTax(): ?string
    {
        return $this->totalTax;
    }

    /**
     * @param string $totalTax
     */
    public function setTotalTax(?string $totalTax)
    {
        $this->totalTax = $totalTax;
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
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }
}
