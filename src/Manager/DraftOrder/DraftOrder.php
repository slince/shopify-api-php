<?php

namespace Slince\Shopify\Manager\DraftOrder;

use Slince\Shopify\Common\Model\AdminGraphqlApiId;
use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Manager\Customer\Customer;
use Slince\Shopify\Manager\Order\Address;
use Slince\Shopify\Manager\Order\LineItem;
use Slince\Shopify\Manager\Order\TaxLine;

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
     * @var boolean
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
    protected $tag;

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
     *
     * @return DraftOrder
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setTaxesIncluded($taxesIncluded)
    {
        $this->taxesIncluded = $taxesIncluded;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInvoiceSentAt()
    {
        return $this->invoiceSentAt;
    }

    /**
     * @param \DateTimeInterface $invoiceSentAt
     *
     * @return DraftOrder
     */
    public function setInvoiceSentAt($invoiceSentAt)
    {
        $this->invoiceSentAt = $invoiceSentAt;

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
     * @return DraftOrder
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
     * @return DraftOrder
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

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
     * @return DraftOrder
     */
    public function setTaxExempt($taxExempt)
    {
        $this->taxExempt = $taxExempt;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * @param \DateTimeInterface $completedAt
     *
     * @return DraftOrder
     */
    public function setCompletedAt($completedAt)
    {
        $this->completedAt = $completedAt;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setInvoiceUrl($invoiceUrl)
    {
        $this->invoiceUrl = $invoiceUrl;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setAppliedDiscount($appliedDiscount)
    {
        $this->appliedDiscount = $appliedDiscount;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setShippingLine($shippingLine)
    {
        $this->shippingLine = $shippingLine;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     *
     * @return DraftOrder
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setNoteAttributes($noteAttributes)
    {
        $this->noteAttributes = $noteAttributes;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setSubtotalPrice($subtotalPrice)
    {
        $this->subtotalPrice = $subtotalPrice;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
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
     *
     * @return DraftOrder
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }
}
