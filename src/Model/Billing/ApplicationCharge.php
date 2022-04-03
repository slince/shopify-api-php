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

class ApplicationCharge
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
    protected $returnUrl;

    /**
     * @var bool
     */
    protected $test;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $chargeType;

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
     * @return string
     */
    public function getChargeType(): ?string
    {
        return $this->chargeType;
    }

    /**
     * @param string $chargeType
     */
    public function setChargeType(?string $chargeType)
    {
        $this->chargeType = $chargeType;
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
