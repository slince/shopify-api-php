<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Refund;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;
use Slince\Shopify\Manager\Transaction\Transaction;

class Refund extends Model
{
    use AdminGraphqlApiId;

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
     * @var bool
     */
    protected $restock;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $processedAt;

    /**
     * @var RefundLineItem[]
     */
    protected $refundLineItems;

    /**
     * @var Transaction[]
     */
    protected $transactions;

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
     * @return Refund
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

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
     * @return Refund
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

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
     * @return Refund
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRestock()
    {
        return $this->restock;
    }

    /**
     * @param bool $restock
     *
     * @return Refund
     */
    public function setRestock($restock)
    {
        $this->restock = $restock;

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
     * @return Refund
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

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
     * @return Refund
     */
    public function setProcessedAt($processedAt)
    {
        $this->processedAt = $processedAt;

        return $this;
    }

    /**
     * @return RefundLineItem[]
     */
    public function getRefundLineItems()
    {
        return $this->refundLineItems;
    }

    /**
     * @param RefundLineItem[] $refundLineItems
     *
     * @return Refund
     */
    public function setRefundLineItems($refundLineItems)
    {
        $this->refundLineItems = $refundLineItems;

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
     * @return Refund
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }
}