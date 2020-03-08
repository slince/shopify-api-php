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

class Transaction extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var string
     */
    protected $authorization;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var string
     */
    protected $gateway;

    /**
     * @var string
     */
    protected $sourceName;

    /**
     * @var array
     */
    protected $paymentDetails;

    /**
     * @var string
     */
    protected $kind;

    /**
     * @var int
     */
    protected $orderId;

    /**
     * @var array
     */
    protected $receipt;

    /**
     * @var string
     */
    protected $errorCode;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var bool
     */
    protected $test;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;


    }

    /**
     * @return string
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * @param string $authorization
     *
     * @return Transaction
     */
    public function setAuthorization($authorization)
    {
        $this->authorization = $authorization;


    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return Transaction
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;


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
     * @return Transaction
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;


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
     * @return Transaction
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;


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
     * @return Transaction
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;


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
     * @return Transaction
     */
    public function setPaymentDetails($paymentDetails)
    {
        $this->paymentDetails = $paymentDetails;


    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return Transaction
     */
    public function setKind($kind)
    {
        $this->kind = $kind;


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
     * @return Transaction
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;


    }

    /**
     * @return array
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     * @param array $receipt
     *
     * @return Transaction
     */
    public function setReceipt($receipt)
    {
        $this->receipt = $receipt;


    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     *
     * @return Transaction
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;


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
     * @return Transaction
     */
    public function setStatus($status)
    {
        $this->status = $status;


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
     * @return Transaction
     */
    public function setTest($test)
    {
        $this->test = $test;


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
     * @return Transaction
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;


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
     * @return Transaction
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;


    }
}