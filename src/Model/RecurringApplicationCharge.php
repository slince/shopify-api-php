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

class RecurringApplicationCharge extends Model
{
    /**
     * @var DateTime
     */
    protected $activatedOn;

    /**
     * @var DateTime
     */
    protected $billingOn;

    /**
     * @var DateTime
     */
    protected $cancelledOn;

    /**
     * @var int
     */
    protected $cappedAmount;

    /**
     * @var string
     */
    protected $confirmationUrl;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $decoratedReturnUrl;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $returnUrl;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $terms;

    /**
     * @var bool
     */
    protected $test;

    /**
     * @var int
     */
    protected $trialDays;

    /**
     * @var DateTime
     */
    protected $trialEndsOn;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @return DateTime
     */
    public function getActivatedOn()
    {
        return $this->activatedOn;
    }

    public function setActivatedOn(DateTime $activatedOn)
    {
        $this->activatedOn = $activatedOn;
    }

    /**
     * @return DateTime
     */
    public function getBillingOn()
    {
        return $this->billingOn;
    }

    public function setBillingOn(DateTime $billingOn)
    {
        $this->billingOn = $billingOn;
    }

    /**
     * @return DateTime
     */
    public function getCancelledOn()
    {
        return $this->cancelledOn;
    }

    public function setCancelledOn(DateTime $cancelledOn)
    {
        $this->cancelledOn = $cancelledOn;
    }

    /**
     * @return int
     */
    public function getCappedAmount()
    {
        return $this->cappedAmount;
    }

    /**
     * @param int $cappedAmount
     */
    public function setCappedAmount($cappedAmount)
    {
        $this->cappedAmount = $cappedAmount;
    }

    /**
     * @return string
     */
    public function getConfirmationUrl()
    {
        return $this->confirmationUrl;
    }

    /**
     * @param string $confirmationUrl
     */
    public function setConfirmationUrl($confirmationUrl)
    {
        $this->confirmationUrl = $confirmationUrl;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getDecoratedReturnUrl()
    {
        return $this->decoratedReturnUrl;
    }

    /**
     * @param string $decoratedReturnUrl
     */
    public function setDecoratedReturnUrl($decoratedReturnUrl)
    {
        $this->decoratedReturnUrl = $decoratedReturnUrl;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
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
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param string $terms
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
    }

    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * @param bool $test
     */
    public function setTest($test)
    {
        $this->test = $test;
    }

    /**
     * @return int
     */
    public function getTrialDays()
    {
        return $this->trialDays;
    }

    /**
     * @param int $trialDays
     */
    public function setTrialDays($trialDays)
    {
        $this->trialDays = $trialDays;
    }

    /**
     * @return DateTime
     */
    public function getTrialEndsOn()
    {
        return $this->trialEndsOn;
    }

    public function setTrialEndsOn(DateTime $trialEndsOn)
    {
        $this->trialEndsOn = $trialEndsOn;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
