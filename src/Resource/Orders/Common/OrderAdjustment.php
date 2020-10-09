<?php


namespace Slince\Shopify\Resource\Orders\Common;

use Slince\Shopify\Resource\Common\PriceSet;

class OrderAdjustment
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $orderId;
    /**
     * @var int
     */
    protected $refundId;
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $taxAmount;
    /**
     * @var string
     */
    protected $kind;
    /**
     * @var string
     */
    protected $reason;
    /**
     * @var PriceSet
     */
    protected $amountSet;
    /**
     * @var PriceSet
     */
    protected $taxAmountSet;

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
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getRefundId(): int
    {
        return $this->refundId;
    }

    /**
     * @param int $refundId
     */
    public function setRefundId(int $refundId): void
    {
        $this->refundId = $refundId;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getTaxAmount(): string
    {
        return $this->taxAmount;
    }

    /**
     * @param string $taxAmount
     */
    public function setTaxAmount(string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return PriceSet
     */
    public function getAmountSet(): PriceSet
    {
        return $this->amountSet;
    }

    /**
     * @param PriceSet $amountSet
     */
    public function setAmountSet(PriceSet $amountSet): void
    {
        $this->amountSet = $amountSet;
    }

    /**
     * @return PriceSet
     */
    public function getTaxAmountSet(): PriceSet
    {
        return $this->taxAmountSet;
    }

    /**
     * @param PriceSet $taxAmountSet
     */
    public function setTaxAmountSet(PriceSet $taxAmountSet): void
    {
        $this->taxAmountSet = $taxAmountSet;
    }
}