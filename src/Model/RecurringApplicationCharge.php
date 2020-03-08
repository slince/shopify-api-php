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
     * @var \DateTime
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
     * @var \DateTime
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


    }

    /**
     * @return string
     */
    public function getCancelledOn()
    {
        return $this->cancelledOn;
    }

    /**
     * @param string $cancelledOn
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setCancelledOn($cancelledOn)
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setConfirmationUrl($confirmationUrl)
    {
        $this->confirmationUrl = $confirmationUrl;


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
     * @return RecurringApplicationCharge
     */
    public function setCreatedAt(\DateTime $createdAt)
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
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
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setTrialDays($trialDays)
    {
        $this->trialDays = $trialDays;


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


    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *                                                                
     * @return RecurringApplicationCharge
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;


    }
    
}