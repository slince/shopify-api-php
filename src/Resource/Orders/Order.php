<?php

namespace Slince\Shopify\Resource\Order;

use Slince\Shopify\Resource\Common\PriceSet;
use Slince\Shopify\Resource\Customer\Customer;
use Slince\Shopify\Resource\Orders\Common\ClientDetails;
use Slince\Shopify\Resource\Orders\Common\DiscountAllocation;
use Slince\Shopify\Resource\Orders\Common\DiscountCode;
use Slince\Shopify\Resource\Orders\Common\LineItem;
use Slince\Shopify\Resource\Orders\Common\NoteAttribute;
use Slince\Shopify\Resource\Orders\Common\OrderAddress;
use Slince\Shopify\Resource\Orders\Common\PaymentDetails;
use Slince\Shopify\Resource\Orders\Common\ShippingLine;
use Slince\Shopify\Resource\Orders\Common\TaxLine;
use Slince\Shopify\Resource\Shipping\Fulfillment;

class Order
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
     * @var string
     */
    protected $totalPrice;

    /**
     * @var string
     */
    protected $subtotalPrice;

    /**
     * @var int
     */
    protected $totalWeight;

    /**
     * @var string
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
     * @var string
     */
    protected $totalDiscounts;

    /**
     * @var string
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
     * @var \DateTimeInterface
     */
    protected $cancelledAt;

    /**
     * @var string
     */
    protected $cancelReason;

    /**
     * @var string
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
     * @var \DateTimeInterface
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
    protected $customLocale;

    /**
     * @var string
     */
    protected $appId;

    /**
     * @var string
     */
    protected $browserIp;

    /**
     * @var string
     */
    protected $landingSiteRef;

    /**
     * @var int
     */
    protected $orderNumber;

    /**
     * @var DiscountAllocation[]
     */
    protected $discountApplications;

    /**
     * @var DiscountCode[]
     */
    protected $discountCodes;

    /**
     * @var NoteAttribute[]
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
    protected $contactEmail;

    /**
     * @var string
     */
    protected $orderStatusUrl;

    /**
     * @var string
     */
    protected $presentmentCurrency;

    /**
     * @var PriceSet
     */
    protected $totalLineItemsPriceSet;

    /**
     * @var PriceSet
     */
    protected $totalDiscountsSet;

    /**
     * @var PriceSet
     */
    protected $totalShippingPriceSet;

    /**
     * @var PriceSet
     */
    protected $subtotalPriceSet;

    /**
     * @var PriceSet
     */
    protected $totalPriceSet;

    /**
     * @var PriceSet
     */
    protected $totalTaxSet;

    /**
     * @var LineItem[]
     */
    protected $lineItems;

    /**
     * @var Fulfillment[]
     */
    protected $fulfillments;

    /**
     * @var Refund[]
     */
    protected $refunds;

    /**
     * @var string
     */
    protected $totalTipReceived;

    /**
     * @var PriceSet
     */
    protected $originalTotalDutiesSet;

    /**
     * @var PriceSet
     */
    protected $currentTotalDutiesSet;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var ShippingLine[]
     */
    protected $shippingLines;

    /**
     * @var OrderAddress
     */
    protected $billingAddress;

    /**
     * @var OrderAddress
     */
    protected $shippingAddress;

    /**
     * @var ClientDetails
     */
    protected $clientDetails;

    /**
     * @var PaymentDetails
     */
    protected $paymentDetails;

    /**
     * @var Transaction[]
     */
    protected $transactions;

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @return int
     */
    public function getId(): int
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
     * @return \DateTimeInterface
     */
    public function getClosedAt(): \DateTimeInterface
    {
        return $this->closedAt;
    }

    /**
     * @param \DateTimeInterface $closedAt
     */
    public function setClosedAt(\DateTimeInterface $closedAt): void
    {
        $this->closedAt = $closedAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
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
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getGateway(): string
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     */
    public function setGateway(string $gateway): void
    {
        $this->gateway = $gateway;
    }

    /**
     * @return bool
     */
    public function isTest(): bool
    {
        return $this->test;
    }

    /**
     * @param bool $test
     */
    public function setTest(bool $test): void
    {
        $this->test = $test;
    }

    /**
     * @return string
     */
    public function getTotalPrice(): string
    {
        return $this->totalPrice;
    }

    /**
     * @param string $totalPrice
     */
    public function setTotalPrice(string $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return string
     */
    public function getSubtotalPrice(): string
    {
        return $this->subtotalPrice;
    }

    /**
     * @param string $subtotalPrice
     */
    public function setSubtotalPrice(string $subtotalPrice): void
    {
        $this->subtotalPrice = $subtotalPrice;
    }

    /**
     * @return int
     */
    public function getTotalWeight(): int
    {
        return $this->totalWeight;
    }

    /**
     * @param int $totalWeight
     */
    public function setTotalWeight(int $totalWeight): void
    {
        $this->totalWeight = $totalWeight;
    }

    /**
     * @return string
     */
    public function getTotalTax(): string
    {
        return $this->totalTax;
    }

    /**
     * @param string $totalTax
     */
    public function setTotalTax(string $totalTax): void
    {
        $this->totalTax = $totalTax;
    }

    /**
     * @return bool
     */
    public function isTaxesIncluded(): bool
    {
        return $this->taxesIncluded;
    }

    /**
     * @param bool $taxesIncluded
     */
    public function setTaxesIncluded(bool $taxesIncluded): void
    {
        $this->taxesIncluded = $taxesIncluded;
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
    public function getFinancialStatus(): string
    {
        return $this->financialStatus;
    }

    /**
     * @param string $financialStatus
     */
    public function setFinancialStatus(string $financialStatus): void
    {
        $this->financialStatus = $financialStatus;
    }

    /**
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }

    /**
     * @param bool $confirmed
     */
    public function setConfirmed(bool $confirmed): void
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return string
     */
    public function getTotalDiscounts(): string
    {
        return $this->totalDiscounts;
    }

    /**
     * @param string $totalDiscounts
     */
    public function setTotalDiscounts(string $totalDiscounts): void
    {
        $this->totalDiscounts = $totalDiscounts;
    }

    /**
     * @return string
     */
    public function getTotalLineItemsPrice(): string
    {
        return $this->totalLineItemsPrice;
    }

    /**
     * @param string $totalLineItemsPrice
     */
    public function setTotalLineItemsPrice(string $totalLineItemsPrice): void
    {
        $this->totalLineItemsPrice = $totalLineItemsPrice;
    }

    /**
     * @return string
     */
    public function getCartToken(): string
    {
        return $this->cartToken;
    }

    /**
     * @param string $cartToken
     */
    public function setCartToken(string $cartToken): void
    {
        $this->cartToken = $cartToken;
    }

    /**
     * @return bool
     */
    public function isBuyerAcceptsMarketing(): bool
    {
        return $this->buyerAcceptsMarketing;
    }

    /**
     * @param bool $buyerAcceptsMarketing
     */
    public function setBuyerAcceptsMarketing(bool $buyerAcceptsMarketing): void
    {
        $this->buyerAcceptsMarketing = $buyerAcceptsMarketing;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getReferringSite(): string
    {
        return $this->referringSite;
    }

    /**
     * @param string $referringSite
     */
    public function setReferringSite(string $referringSite): void
    {
        $this->referringSite = $referringSite;
    }

    /**
     * @return string
     */
    public function getLandingSite(): string
    {
        return $this->landingSite;
    }

    /**
     * @param string $landingSite
     */
    public function setLandingSite(string $landingSite): void
    {
        $this->landingSite = $landingSite;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCancelledAt(): \DateTimeInterface
    {
        return $this->cancelledAt;
    }

    /**
     * @param \DateTimeInterface $cancelledAt
     */
    public function setCancelledAt(\DateTimeInterface $cancelledAt): void
    {
        $this->cancelledAt = $cancelledAt;
    }

    /**
     * @return string
     */
    public function getCancelReason(): string
    {
        return $this->cancelReason;
    }

    /**
     * @param string $cancelReason
     */
    public function setCancelReason(string $cancelReason): void
    {
        $this->cancelReason = $cancelReason;
    }

    /**
     * @return string
     */
    public function getTotalPriceUsd(): string
    {
        return $this->totalPriceUsd;
    }

    /**
     * @param string $totalPriceUsd
     */
    public function setTotalPriceUsd(string $totalPriceUsd): void
    {
        $this->totalPriceUsd = $totalPriceUsd;
    }

    /**
     * @return string
     */
    public function getCheckoutToken(): string
    {
        return $this->checkoutToken;
    }

    /**
     * @param string $checkoutToken
     */
    public function setCheckoutToken(string $checkoutToken): void
    {
        $this->checkoutToken = $checkoutToken;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId(int $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * @return string
     */
    public function getSourceIdentifier(): string
    {
        return $this->sourceIdentifier;
    }

    /**
     * @param string $sourceIdentifier
     */
    public function setSourceIdentifier(string $sourceIdentifier): void
    {
        $this->sourceIdentifier = $sourceIdentifier;
    }

    /**
     * @return string
     */
    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     */
    public function setSourceUrl(string $sourceUrl): void
    {
        $this->sourceUrl = $sourceUrl;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getProcessedAt(): \DateTimeInterface
    {
        return $this->processedAt;
    }

    /**
     * @param \DateTimeInterface $processedAt
     */
    public function setProcessedAt(\DateTimeInterface $processedAt): void
    {
        $this->processedAt = $processedAt;
    }

    /**
     * @return string
     */
    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     */
    public function setDeviceId(string $deviceId): void
    {
        $this->deviceId = $deviceId;
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
    public function getCustomLocale(): string
    {
        return $this->customLocale;
    }

    /**
     * @param string $customLocale
     */
    public function setCustomLocale(string $customLocale): void
    {
        $this->customLocale = $customLocale;
    }

    /**
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId(string $appId): void
    {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    public function getBrowserIp(): string
    {
        return $this->browserIp;
    }

    /**
     * @param string $browserIp
     */
    public function setBrowserIp(string $browserIp): void
    {
        $this->browserIp = $browserIp;
    }

    /**
     * @return string
     */
    public function getLandingSiteRef(): string
    {
        return $this->landingSiteRef;
    }

    /**
     * @param string $landingSiteRef
     */
    public function setLandingSiteRef(string $landingSiteRef): void
    {
        $this->landingSiteRef = $landingSiteRef;
    }

    /**
     * @return int
     */
    public function getOrderNumber(): int
    {
        return $this->orderNumber;
    }

    /**
     * @param int $orderNumber
     */
    public function setOrderNumber(int $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return DiscountAllocation[]
     */
    public function getDiscountApplications(): array
    {
        return $this->discountApplications;
    }

    /**
     * @param DiscountAllocation[] $discountApplications
     */
    public function setDiscountApplications(array $discountApplications): void
    {
        $this->discountApplications = $discountApplications;
    }

    /**
     * @return DiscountCode[]
     */
    public function getDiscountCodes(): array
    {
        return $this->discountCodes;
    }

    /**
     * @param DiscountCode[] $discountCodes
     */
    public function setDiscountCodes(array $discountCodes): void
    {
        $this->discountCodes = $discountCodes;
    }

    /**
     * @return NoteAttribute[]
     */
    public function getNoteAttributes(): array
    {
        return $this->noteAttributes;
    }

    /**
     * @param NoteAttribute[] $noteAttributes
     */
    public function setNoteAttributes(array $noteAttributes): void
    {
        $this->noteAttributes = $noteAttributes;
    }

    /**
     * @return array
     */
    public function getPaymentGatewayNames(): array
    {
        return $this->paymentGatewayNames;
    }

    /**
     * @param array $paymentGatewayNames
     */
    public function setPaymentGatewayNames(array $paymentGatewayNames): void
    {
        $this->paymentGatewayNames = $paymentGatewayNames;
    }

    /**
     * @return string
     */
    public function getProcessingMethod(): string
    {
        return $this->processingMethod;
    }

    /**
     * @param string $processingMethod
     */
    public function setProcessingMethod(string $processingMethod): void
    {
        $this->processingMethod = $processingMethod;
    }

    /**
     * @return int
     */
    public function getCheckoutId(): int
    {
        return $this->checkoutId;
    }

    /**
     * @param int $checkoutId
     */
    public function setCheckoutId(int $checkoutId): void
    {
        $this->checkoutId = $checkoutId;
    }

    /**
     * @return string
     */
    public function getSourceName(): string
    {
        return $this->sourceName;
    }

    /**
     * @param string $sourceName
     */
    public function setSourceName(string $sourceName): void
    {
        $this->sourceName = $sourceName;
    }

    /**
     * @return string
     */
    public function getFulfillmentStatus(): string
    {
        return $this->fulfillmentStatus;
    }

    /**
     * @param string $fulfillmentStatus
     */
    public function setFulfillmentStatus(string $fulfillmentStatus): void
    {
        $this->fulfillmentStatus = $fulfillmentStatus;
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
    public function setTaxLines(array $taxLines): void
    {
        $this->taxLines = $taxLines;
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
    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     */
    public function setContactEmail(string $contactEmail): void
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @return string
     */
    public function getOrderStatusUrl(): string
    {
        return $this->orderStatusUrl;
    }

    /**
     * @param string $orderStatusUrl
     */
    public function setOrderStatusUrl(string $orderStatusUrl): void
    {
        $this->orderStatusUrl = $orderStatusUrl;
    }

    /**
     * @return string
     */
    public function getPresentmentCurrency(): string
    {
        return $this->presentmentCurrency;
    }

    /**
     * @param string $presentmentCurrency
     */
    public function setPresentmentCurrency(string $presentmentCurrency): void
    {
        $this->presentmentCurrency = $presentmentCurrency;
    }

    /**
     * @return PriceSet
     */
    public function getTotalLineItemsPriceSet(): PriceSet
    {
        return $this->totalLineItemsPriceSet;
    }

    /**
     * @param PriceSet $totalLineItemsPriceSet
     */
    public function setTotalLineItemsPriceSet(PriceSet $totalLineItemsPriceSet): void
    {
        $this->totalLineItemsPriceSet = $totalLineItemsPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalDiscountsSet(): PriceSet
    {
        return $this->totalDiscountsSet;
    }

    /**
     * @param PriceSet $totalDiscountsSet
     */
    public function setTotalDiscountsSet(PriceSet $totalDiscountsSet): void
    {
        $this->totalDiscountsSet = $totalDiscountsSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalShippingPriceSet(): PriceSet
    {
        return $this->totalShippingPriceSet;
    }

    /**
     * @param PriceSet $totalShippingPriceSet
     */
    public function setTotalShippingPriceSet(PriceSet $totalShippingPriceSet): void
    {
        $this->totalShippingPriceSet = $totalShippingPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getSubtotalPriceSet(): PriceSet
    {
        return $this->subtotalPriceSet;
    }

    /**
     * @param PriceSet $subtotalPriceSet
     */
    public function setSubtotalPriceSet(PriceSet $subtotalPriceSet): void
    {
        $this->subtotalPriceSet = $subtotalPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalPriceSet(): PriceSet
    {
        return $this->totalPriceSet;
    }

    /**
     * @param PriceSet $totalPriceSet
     */
    public function setTotalPriceSet(PriceSet $totalPriceSet): void
    {
        $this->totalPriceSet = $totalPriceSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalTaxSet(): PriceSet
    {
        return $this->totalTaxSet;
    }

    /**
     * @param PriceSet $totalTaxSet
     */
    public function setTotalTaxSet(PriceSet $totalTaxSet): void
    {
        $this->totalTaxSet = $totalTaxSet;
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
    public function setLineItems(array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * @return Fulfillment[]
     */
    public function getFulfillments(): array
    {
        return $this->fulfillments;
    }

    /**
     * @param Fulfillment[] $fulfillments
     */
    public function setFulfillments(array $fulfillments): void
    {
        $this->fulfillments = $fulfillments;
    }

    /**
     * @return Refund[]
     */
    public function getRefunds(): array
    {
        return $this->refunds;
    }

    /**
     * @param Refund[] $refunds
     */
    public function setRefunds(array $refunds): void
    {
        $this->refunds = $refunds;
    }

    /**
     * @return string
     */
    public function getTotalTipReceived(): string
    {
        return $this->totalTipReceived;
    }

    /**
     * @param string $totalTipReceived
     */
    public function setTotalTipReceived(string $totalTipReceived): void
    {
        $this->totalTipReceived = $totalTipReceived;
    }

    /**
     * @return PriceSet
     */
    public function getOriginalTotalDutiesSet(): PriceSet
    {
        return $this->originalTotalDutiesSet;
    }

    /**
     * @param PriceSet $originalTotalDutiesSet
     */
    public function setOriginalTotalDutiesSet(PriceSet $originalTotalDutiesSet): void
    {
        $this->originalTotalDutiesSet = $originalTotalDutiesSet;
    }

    /**
     * @return PriceSet
     */
    public function getCurrentTotalDutiesSet(): PriceSet
    {
        return $this->currentTotalDutiesSet;
    }

    /**
     * @param PriceSet $currentTotalDutiesSet
     */
    public function setCurrentTotalDutiesSet(PriceSet $currentTotalDutiesSet): void
    {
        $this->currentTotalDutiesSet = $currentTotalDutiesSet;
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
     * @return ShippingLine[]
     */
    public function getShippingLines(): array
    {
        return $this->shippingLines;
    }

    /**
     * @param ShippingLine[] $shippingLines
     */
    public function setShippingLines(array $shippingLines): void
    {
        $this->shippingLines = $shippingLines;
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
    public function setBillingAddress(OrderAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
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
    public function setShippingAddress(OrderAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return ClientDetails
     */
    public function getClientDetails(): ClientDetails
    {
        return $this->clientDetails;
    }

    /**
     * @param ClientDetails $clientDetails
     */
    public function setClientDetails(ClientDetails $clientDetails): void
    {
        $this->clientDetails = $clientDetails;
    }

    /**
     * @return PaymentDetails
     */
    public function getPaymentDetails(): PaymentDetails
    {
        return $this->paymentDetails;
    }

    /**
     * @param PaymentDetails $paymentDetails
     */
    public function setPaymentDetails(PaymentDetails $paymentDetails): void
    {
        $this->paymentDetails = $paymentDetails;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    /**
     * @param Transaction[] $transactions
     */
    public function setTransactions(array $transactions): void
    {
        $this->transactions = $transactions;
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
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }
}