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

class Refund extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var DateTime
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
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return Refund
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
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
    }
}
