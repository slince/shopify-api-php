<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Order;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;
use Slince\Shopify\Manager\Customer\Customer;
use Slince\Shopify\Manager\Fulfillment\Fulfillment;
use Slince\Shopify\Manager\Refund\Refund;
use Slince\Shopify\Manager\Transaction\Transaction;

class Order extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var \DateTimeInterface
     */
    protected $closedAt;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var \DateTimeInterface
     */
    protected $deletedAt;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $gateway;

    /**
     * @var bool
     */
    protected $test;

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
    protected $totalWeight;

    /**
     * @var float
     */
    protected $totalTax;

    /**
     * @var bool
     */
    protected $taxesIncluded;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $financialStatus;

    /**
     * @var bool
     */
    protected $confirmed;

    /**
     * @var float
     */
    protected $totalDiscounts;

    /**
     * @var float
     */
    protected $totalLineItemsPrice;

    /**
     * @var string
     */
    protected $cartToken;

    /**
     * @var bool
     */
    protected $buyerAcceptsMarketing;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $referringSite;

    /**
     * @var string
     */
    protected $landingSite;

    /**
     * @var string
     */
    protected $cancelledAt;

    /**
     * @var string
     */
    protected $cancelReason;

    /**
     * @var float
     */
    protected $totalPriceUsd;

    /**
     * @var string
     */
    protected $checkoutToken;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var int
     */
    protected $locationId;

    /**
     * @var string
     */
    protected $sourceIdentifier;

    /**
     * @var string
     */
    protected $sourceUrl;

    /**
     * @var string
     */
    protected $processedAt;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $browserIp;

    /**
     * @var string
     */
    protected $landingSiteRef;

    /**
     * @var string
     */
    protected $orderNumber;

    /**
     * @var array
     */
    protected $discountCodes;

    /**
     * @var array
     */
    protected $noteAttributes;

    /**
     * @var array
     */
    protected $paymentGatewayNames;

    /**
     * @var string
     */
    protected $processingMethod;

    /**
     * @var int
     */
    protected $checkoutId;

    /**
     * @var string
     */
    protected $sourceName;

    /**
     * @var string
     */
    protected $fulfillmentStatus;

    /**
     * @var array
     */
    protected $taxLines;

    /**
     * @var array
     */
    protected $tags;

    /**
     * @var string
     */
    protected $contactEmail;

    /**
     * @var string
     */
    protected $orderStatusUrl;

    /**
     * @var LineItem[]
     */
    protected $lineItems;

    /**
     * @var ShippingLine[]
     */
    protected $shippingLines;

    /**
     * @var Address
     */
    protected $billingAddress;

    /**
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @var Fulfillment[]
     */
    protected $fulfillments;

    /**
     * @var ClientDetails
     */
    protected $clientDetails;

    /**
     * @var Refund[]
     */
    protected $refunds;

    /**
     * @var Transaction[]
     */
    protected $transactions;

    /**
     * @var array
     */
    protected $paymentDetails;

    /**
     * @var DiscountApplication[]
     */
    protected $discountApplications;

    /**
     * @var Customer
     */
    protected $customer;

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
     * @return Order
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * @param \DateTimeInterface $closedAt
     *
     * @return Order
     */
    public function setClosedAt($closedAt)
    {
        $this->closedAt = $closedAt;

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
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
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
     * @return Order
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param \DateTimeInterface $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }


    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return Order
     */
    public function setNumber($number)
    {
        $this->number = $number;

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
     * @return Order
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     *
     * @return Order
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     *
     * @return Order
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTest()
    {
        return $this->test;
    }

    /**
     * @param bool $test
     *
     * @return Order
     */
    public function setTest($test)
    {
        $this->test = $test;

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
     * @return Order
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
     * @return Order
     */
    public function setSubtotalPrice($subtotalPrice)
    {
        $this->subtotalPrice = $subtotalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * @param float $totalWeight
     *
     * @return Order
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;

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
     * @return Order
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

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
     * @return Order
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
     * @return Order
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getFinancialStatus()
    {
        return $this->financialStatus;
    }

    /**
     * @param string $financialStatus
     *
     * @return Order
     */
    public function setFinancialStatus($financialStatus)
    {
        $this->financialStatus = $financialStatus;

        return $this;
    }

    /**
     * @return bool
     */
    public function isConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @param bool $confirmed
     *
     * @return Order
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscounts()
    {
        return $this->totalDiscounts;
    }

    /**
     * @param float $totalDiscounts
     *
     * @return Order
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalLineItemsPrice()
    {
        return $this->totalLineItemsPrice;
    }

    /**
     * @param float $totalLineItemsPrice
     *
     * @return Order
     */
    public function setTotalLineItemsPrice($totalLineItemsPrice)
    {
        $this->totalLineItemsPrice = $totalLineItemsPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getCartToken()
    {
        return $this->cartToken;
    }

    /**
     * @param string $cartToken
     *
     * @return Order
     */
    public function setCartToken($cartToken)
    {
        $this->cartToken = $cartToken;

        return $this;
    }

    /**
     * @return bool
     */
    public function isBuyerAcceptsMarketing()
    {
        return $this->buyerAcceptsMarketing;
    }

    /**
     * @param bool $buyerAcceptsMarketing
     *
     * @return Order
     */
    public function setBuyerAcceptsMarketing($buyerAcceptsMarketing)
    {
        $this->buyerAcceptsMarketing = $buyerAcceptsMarketing;

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
     * @return Order
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferringSite()
    {
        return $this->referringSite;
    }

    /**
     * @param string $referringSite
     *
     * @return Order
     */
    public function setReferringSite($referringSite)
    {
        $this->referringSite = $referringSite;

        return $this;
    }

    /**
     * @return string
     */
    public function getLandingSite()
    {
        return $this->landingSite;
    }

    /**
     * @param string $landingSite
     *
     * @return Order
     */
    public function setLandingSite($landingSite)
    {
        $this->landingSite = $landingSite;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelledAt()
    {
        return $this->cancelledAt;
    }

    /**
     * @param string $cancelledAt
     *
     * @return Order
     */
    public function setCancelledAt($cancelledAt)
    {
        $this->cancelledAt = $cancelledAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * @param string $cancelReason
     *
     * @return Order
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason = $cancelReason;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPriceUsd()
    {
        return $this->totalPriceUsd;
    }

    /**
     * @param float $totalPriceUsd
     *
     * @return Order
     */
    public function setTotalPriceUsd($totalPriceUsd)
    {
        $this->totalPriceUsd = $totalPriceUsd;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutToken()
    {
        return $this->checkoutToken;
    }

    /**
     * @param string $checkoutToken
     *
     * @return Order
     */
    public function setCheckoutToken($checkoutToken)
    {
        $this->checkoutToken = $checkoutToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return Order
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return Order
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     *
     * @return Order
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceIdentifier()
    {
        return $this->sourceIdentifier;
    }

    /**
     * @param string $sourceIdentifier
     *
     * @return Order
     */
    public function setSourceIdentifier($sourceIdentifier)
    {
        $this->sourceIdentifier = $sourceIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     *
     * @return Order
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcessedAt()
    {
        return $this->processedAt;
    }

    /**
     * @param string $processedAt
     *
     * @return Order
     */
    public function setProcessedAt($processedAt)
    {
        $this->processedAt = $processedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     *
     * @return Order
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

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
     * @return Order
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrowserIp()
    {
        return $this->browserIp;
    }

    /**
     * @param string $browserIp
     *
     * @return Order
     */
    public function setBrowserIp($browserIp)
    {
        $this->browserIp = $browserIp;

        return $this;
    }

    /**
     * @return string
     */
    public function getLandingSiteRef()
    {
        return $this->landingSiteRef;
    }

    /**
     * @param string $landingSiteRef
     *
     * @return Order
     */
    public function setLandingSiteRef($landingSiteRef)
    {
        $this->landingSiteRef = $landingSiteRef;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     *
     * @return Order
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return array
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    /**
     * @param array $discountCodes
     *
     * @return Order
     */
    public function setDiscountCodes($discountCodes)
    {
        $this->discountCodes = $discountCodes;

        return $this;
    }

    /**
     * @return array
     */
    public function getNoteAttributes()
    {
        return $this->noteAttributes;
    }

    /**
     * @param array $noteAttributes
     *
     * @return Order
     */
    public function setNoteAttributes($noteAttributes)
    {
        $this->noteAttributes = $noteAttributes;

        return $this;
    }

    /**
     * @return array
     */
    public function getPaymentGatewayNames()
    {
        return $this->paymentGatewayNames;
    }

    /**
     * @param array $paymentGatewayNames
     *
     * @return Order
     */
    public function setPaymentGatewayNames($paymentGatewayNames)
    {
        $this->paymentGatewayNames = $paymentGatewayNames;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcessingMethod()
    {
        return $this->processingMethod;
    }

    /**
     * @param string $processingMethod
     *
     * @return Order
     */
    public function setProcessingMethod($processingMethod)
    {
        $this->processingMethod = $processingMethod;

        return $this;
    }

    /**
     * @return int
     */
    public function getCheckoutId()
    {
        return $this->checkoutId;
    }

    /**
     * @param int $checkoutId
     *
     * @return Order
     */
    public function setCheckoutId($checkoutId)
    {
        $this->checkoutId = $checkoutId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * @param string $sourceName
     *
     * @return Order
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentStatus()
    {
        return $this->fulfillmentStatus;
    }

    /**
     * @param string $fulfillmentStatus
     *
     * @return Order
     */
    public function setFulfillmentStatus($fulfillmentStatus)
    {
        $this->fulfillmentStatus = $fulfillmentStatus;

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
     * @return Order
     */
    public function setTaxLines($taxLines)
    {
        $this->taxLines = $taxLines;

        return $this;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     *
     * @return Order
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     *
     * @return Order
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatusUrl()
    {
        return $this->orderStatusUrl;
    }

    /**
     * @param string $orderStatusUrl
     *
     * @return Order
     */
    public function setOrderStatusUrl($orderStatusUrl)
    {
        $this->orderStatusUrl = $orderStatusUrl;

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
     * @return Order
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * @return ShippingLine[]
     */
    public function getShippingLines()
    {
        return $this->shippingLines;
    }

    /**
     * @param ShippingLine[] $shippingLines
     *
     * @return Order
     */
    public function setShippingLines($shippingLines)
    {
        $this->shippingLines = $shippingLines;

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
     * @return Order
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;

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
     * @return Order
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return Fulfillment[]
     */
    public function getFulfillments()
    {
        return $this->fulfillments;
    }

    /**
     * @param Fulfillment[] $fulfillments
     *
     * @return Order
     */
    public function setFulfillments($fulfillments)
    {
        $this->fulfillments = $fulfillments;

        return $this;
    }

    /**
     * @return ClientDetails
     */
    public function getClientDetails()
    {
        return $this->clientDetails;
    }

    /**
     * @param ClientDetails $clientDetails
     *
     * @return Order
     */
    public function setClientDetails($clientDetails)
    {
        $this->clientDetails = $clientDetails;

        return $this;
    }

    /**
     * @return Refund[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param Refund[] $refunds
     *
     * @return Order
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;

        return $this;
    }

    /**
     * @return array
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    /**
     * @param array $paymentDetails
     *
     * @return Order
     */
    public function setPaymentDetails($paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;

        return $this;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param Transaction[] $transactions
     *
     * @return Order
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * @return DiscountApplication[]
     */
    public function getDiscountApplications()
    {
        return $this->discountApplications;
    }

    /**
     * @param DiscountApplication[] $discountApplications
     *
     * @return Order
     */
    public function setDiscountApplications($discountApplications)
    {
        $this->discountApplications = $discountApplications;

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
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
}