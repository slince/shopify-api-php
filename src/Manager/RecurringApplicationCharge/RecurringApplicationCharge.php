<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\RecurringApplicationCharge;

use Slince\Shopify\Common\Model\Model;

class RecurringApplicationCharge extends Model
{
    /**
     * @var string
     */
    protected $activatedOn;

    /**
     * @var string
     */
    protected $billingOn;

    /**
     * @var string
     */
    protected $canceledOn;

    /**
     * @var int
     */
    protected $cappedAmount;

    /**
     * @var string
     */
    protected $confirmationUrl;

    /**
     * @var \DateTimeInterface
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
     * @var bool
     */
    protected $trialEndsOn;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @return string
     */
    public function getActivatedOn()
    {
        return $this->activatedOn;
    }

    /**
     * @param string $activatedOn
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setActivatedOn($activatedOn)
    {
        $this->activatedOn = $activatedOn;

        return $this;
    }

    /**
     * @return string
     */
    public function getBillingOn()
    {
        return $this->billingOn;
    }

    /**
     * @param string $billingOn
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setBillingOn($billingOn)
    {
        $this->billingOn = $billingOn;

        return $this;
    }

    /**
     * @return string
     */
    public function getCanceledOn()
    {
        return $this->canceledOn;
    }

    /**
     * @param string $canceledOn
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setCanceledOn($canceledOn)
    {
        $this->canceledOn = $canceledOn;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setCappedAmount($cappedAmount)
    {
        $this->cappedAmount = $cappedAmount;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setConfirmationUrl($confirmationUrl)
    {
        $this->confirmationUrl = $confirmationUrl;

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
     * @return RecurringApplicationCharge
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setDecoratedReturnUrl($decoratedReturnUrl)
    {
        $this->decoratedReturnUrl = $decoratedReturnUrl;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
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
     * @return RecurringApplicationCharge
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setTrialDays($trialDays)
    {
        $this->trialDays = $trialDays;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTrialEndsOn()
    {
        return $this->trialEndsOn;
    }

    /**
     * @param bool $trialEndsOn
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setTrialEndsOn($trialEndsOn)
    {
        $this->trialEndsOn = $trialEndsOn;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
    
}