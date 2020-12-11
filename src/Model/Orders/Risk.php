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

class Risk
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
    protected $checkoutId;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $score;

    /**
     * @var string
     */
    protected $recommendation;

    /**
     * @var bool
     */
    protected $display;

    /**
     * @var bool
     */
    protected $causeCancel;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $merchantMessage;

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
     * @return int
     */
    public function getCheckoutId(): ?int
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
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getScore(): string
    {
        return $this->score;
    }

    /**
     * @param string $score
     */
    public function setScore(string $score): void
    {
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getRecommendation(): string
    {
        return $this->recommendation;
    }

    /**
     * @param string $recommendation
     */
    public function setRecommendation(string $recommendation): void
    {
        $this->recommendation = $recommendation;
    }

    /**
     * @return bool
     */
    public function isDisplay(): bool
    {
        return $this->display;
    }

    /**
     * @param bool $display
     */
    public function setDisplay(bool $display): void
    {
        $this->display = $display;
    }

    /**
     * @return bool
     */
    public function isCauseCancel(): bool
    {
        return $this->causeCancel;
    }

    /**
     * @param bool $causeCancel
     */
    public function setCauseCancel(bool $causeCancel): void
    {
        $this->causeCancel = $causeCancel;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMerchantMessage(): string
    {
        return $this->merchantMessage;
    }

    /**
     * @param string $merchantMessage
     */
    public function setMerchantMessage(string $merchantMessage): void
    {
        $this->merchantMessage = $merchantMessage;
    }
}
