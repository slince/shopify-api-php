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


namespace Slince\Shopify\Model\Billing;

class RecurringApplicationCharge
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $apiClientId;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $terms;

    /**
     * @var string
     */
    protected $returnUrl;

    /**
     * @var \DateTimeInterface
     */
    protected $billingOn;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $test;

    /**
     * @var \DateTimeInterface
     */
    protected $activatedOn;

    /**
     * @var \DateTimeInterface
     */
    protected $cancelledOn;

    /**
     * @var int
     */
    protected $trialDays;

    /**
     * @var int
     */
    protected $cappedAmount;

    /**
     * @var \DateTimeInterface
     */
    protected $trialEndsAOn;

    /**
     * @var float
     */
    protected $balanceUsed;

    /**
     * @var float
     */
    protected $balanceRemaining;

    /**
     * @var int
     */
    protected $riskLevel;

    /**
     * @var string
     */
    protected $decoratedReturnUrl;

    /**
     * @var string
     */
    protected $confirmationUrl;

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
    public function setId(?int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getApiClientId(): ?int
    {
        return $this->apiClientId;
    }

    /**
     * @param int $apiClientId
     */
    public function setApiClientId(?int $apiClientId)
    {
        $this->apiClientId = $apiClientId;
    }

    /**
     * @return string
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(?string $price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(?string $status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTerms(): ?string
    {
        return $this->terms;
    }

    /**
     * @param string $terms
     */
    public function setTerms(?string $terms)
    {
        $this->terms = $terms;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     */
    public function setReturnUrl(?string $returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBillingOn(): ?\DateTimeInterface
    {
        return $this->billingOn;
    }

    /**
     * @param \DateTimeInterface $billingOn
     */
    public function setBillingOn(?\DateTimeInterface $billingOn)
    {
        $this->billingOn = $billingOn;
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
    public function setCreatedAt(?\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    /**
     * @param bool $test
     */
    public function setTest(?bool $test)
    {
        $this->test = $test;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getActivatedOn(): ?\DateTimeInterface
    {
        return $this->activatedOn;
    }

    /**
     * @param \DateTimeInterface $activatedOn
     */
    public function setActivatedOn(?\DateTimeInterface $activatedOn)
    {
        $this->activatedOn = $activatedOn;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCancelledOn(): ?\DateTimeInterface
    {
        return $this->cancelledOn;
    }

    /**
     * @param \DateTimeInterface $cancelledOn
     */
    public function setCancelledOn(?\DateTimeInterface $cancelledOn)
    {
        $this->cancelledOn = $cancelledOn;
    }

    /**
     * @return int
     */
    public function getTrialDays(): ?int
    {
        return $this->trialDays;
    }

    /**
     * @param int $trialDays
     */
    public function setTrialDays(?int $trialDays)
    {
        $this->trialDays = $trialDays;
    }

    /**
     * @return int
     */
    public function getCappedAmount(): ?int
    {
        return $this->cappedAmount;
    }

    /**
     * @param int $cappedAmount
     */
    public function setCappedAmount(?int $cappedAmount)
    {
        $this->cappedAmount = $cappedAmount;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTrialEndsAOn(): ?\DateTimeInterface
    {
        return $this->trialEndsAOn;
    }

    /**
     * @param \DateTimeInterface $trialEndsAOn
     */
    public function setTrialEndsAOn(?\DateTimeInterface $trialEndsAOn)
    {
        $this->trialEndsAOn = $trialEndsAOn;
    }

    /**
     * @return float
     */
    public function getBalanceUsed(): float
    {
        return $this->balanceUsed;
    }

    /**
     * @param float $balanceUsed
     */
    public function setBalanceUsed(float $balanceUsed)
    {
        $this->balanceUsed = $balanceUsed;
    }

    /**
     * @return float
     */
    public function getBalanceRemaining(): float
    {
        return $this->balanceRemaining;
    }

    /**
     * @param float $balanceRemaining
     */
    public function setBalanceRemaining(float $balanceRemaining)
    {
        $this->balanceRemaining = $balanceRemaining;
    }

    /**
     * @return int
     */
    public function getRiskLevel(): ?int
    {
        return $this->riskLevel;
    }

    /**
     * @param int $riskLevel
     */
    public function setRiskLevel(?int $riskLevel)
    {
        $this->riskLevel = $riskLevel;
    }

    /**
     * @return string
     */
    public function getDecoratedReturnUrl(): ?string
    {
        return $this->decoratedReturnUrl;
    }

    /**
     * @param string $decoratedReturnUrl
     */
    public function setDecoratedReturnUrl(?string $decoratedReturnUrl)
    {
        $this->decoratedReturnUrl = $decoratedReturnUrl;
    }

    /**
     * @return string
     */
    public function getConfirmationUrl(): ?string
    {
        return $this->confirmationUrl;
    }

    /**
     * @param string $confirmationUrl
     */
    public function setConfirmationUrl(?string $confirmationUrl)
    {
        $this->confirmationUrl = $confirmationUrl;
    }
}
