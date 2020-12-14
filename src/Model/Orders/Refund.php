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

use Slince\Shopify\Model\Common\PriceSet;
use Slince\Shopify\Model\Orders\Common\Duty;
use Slince\Shopify\Model\Orders\Common\OrderAdjustment;
use Slince\Shopify\Model\Orders\Common\RefundDuty;
use Slince\Shopify\Model\Orders\Common\RefundLineItem;

class Refund
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
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $note;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $processedAt;

    /**
     * @var bool
     */
    protected $restock;

    /**
     * @var Duty[]
     */
    protected $duties;

    /**
     * @var PriceSet
     */
    protected $totalDutiesSet;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @var RefundDuty[]
     */
    protected $refundDuties;

    /**
     * @var RefundLineItem[]
     */
    protected $refundLineItems;

    /**
     * @var Transaction[]
     */
    protected $transactions;

    /**
     * @var OrderAdjustment[]
     */
    protected $orderAdjustments;

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
     * @return int
     */
    public function getOrderId(): ?int
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
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
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
     * @return int
     */
    public function getUserId(): ?int
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
     * @return string
     */
    public function getProcessedAt(): string
    {
        return $this->processedAt;
    }

    /**
     * @param string $processedAt
     */
    public function setProcessedAt(string $processedAt): void
    {
        $this->processedAt = $processedAt;
    }

    /**
     * @return bool
     */
    public function isRestock(): bool
    {
        return $this->restock;
    }

    /**
     * @param bool $restock
     */
    public function setRestock(bool $restock): void
    {
        $this->restock = $restock;
    }

    /**
     * @return Duty[]
     */
    public function getDuties(): array
    {
        return $this->duties;
    }

    /**
     * @param Duty[] $duties
     */
    public function setDuties(array $duties): void
    {
        $this->duties = $duties;
    }

    /**
     * @return PriceSet
     */
    public function getTotalDutiesSet(): PriceSet
    {
        return $this->totalDutiesSet;
    }

    /**
     * @param PriceSet $totalDutiesSet
     */
    public function setTotalDutiesSet(PriceSet $totalDutiesSet): void
    {
        $this->totalDutiesSet = $totalDutiesSet;
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
     * @return RefundDuty[]
     */
    public function getRefundDuties(): array
    {
        return $this->refundDuties;
    }

    /**
     * @param RefundDuty[] $refundDuties
     */
    public function setRefundDuties(array $refundDuties): void
    {
        $this->refundDuties = $refundDuties;
    }

    /**
     * @return RefundLineItem[]
     */
    public function getRefundLineItems(): array
    {
        return $this->refundLineItems;
    }

    /**
     * @param RefundLineItem[] $refundLineItems
     */
    public function setRefundLineItems(array $refundLineItems): void
    {
        $this->refundLineItems = $refundLineItems;
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
     * @return OrderAdjustment[]
     */
    public function getOrderAdjustments(): array
    {
        return $this->orderAdjustments;
    }

    /**
     * @param OrderAdjustment[] $orderAdjustments
     */
    public function setOrderAdjustments(array $orderAdjustments): void
    {
        $this->orderAdjustments = $orderAdjustments;
    }
}
