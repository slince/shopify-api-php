<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\OrderRisk;

use Slince\Shopify\Common\Model\Model;

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
     *
     * @return Risk
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

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
     * @return Risk
     */
    public function setCheckoutId($checkoutId)
    {
        $this->checkoutId = $checkoutId;

        return $this;
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
     *
     * @return Risk
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
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
     *
     * @return Risk
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
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
     *
     * @return Risk
     */
    public function setRecommendation($recommendation)
    {
        $this->recommendation = $recommendation;

        return $this;
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
     *
     * @return Risk
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
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
     *
     * @return Risk
     */
    public function setCauseCancel($causeCancel)
    {
        $this->causeCancel = $causeCancel;

        return $this;
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
     *
     * @return Risk
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
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
     *
     * @return Risk
     */
    public function setMerchantMessage($merchantMessage)
    {
        $this->merchantMessage = $merchantMessage;

        return $this;
    }
}