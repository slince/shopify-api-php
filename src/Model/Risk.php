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

class Risk extends Model
{
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
     * @var float
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
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
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
     */
    public function setCheckoutId($checkoutId)
    {
        $this->checkoutId = $checkoutId;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param float $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * @param string $recommendation
     */
    public function setRecommendation($recommendation)
    {
        $this->recommendation = $recommendation;
    }

    /**
     * @return bool
     */
    public function isDisplay()
    {
        return $this->display;
    }

    /**
     * @param bool $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return bool
     */
    public function isCauseCancel()
    {
        return $this->causeCancel;
    }

    /**
     * @param bool $causeCancel
     */
    public function setCauseCancel($causeCancel)
    {
        $this->causeCancel = $causeCancel;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMerchantMessage()
    {
        return $this->merchantMessage;
    }

    /**
     * @param string $merchantMessage
     */
    public function setMerchantMessage($merchantMessage)
    {
        $this->merchantMessage = $merchantMessage;
    }
}
