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
namespace Slince\Shopify\Model\Orders\Common;

class PaymentDetails
{
    /**
     * @var string
     */
    protected $avsResultCode;

    /**
     * @var string
     */
    protected $creditCardBin;

    /**
     * @var string
     */
    protected $cvvResultCode;

    /**
     * @var string
     */
    protected $creditCardNumber;

    /**
     * @var string
     */
    protected $creditCardCompany;

    /**
     * @return string
     */
    public function getAvsResultCode(): ?string
    {
        return $this->avsResultCode;
    }

    /**
     * @param string $avsResultCode
     */
    public function setAvsResultCode(?string $avsResultCode)
    {
        $this->avsResultCode = $avsResultCode;
    }

    /**
     * @return string
     */
    public function getCreditCardBin(): ?string
    {
        return $this->creditCardBin;
    }

    /**
     * @param string $creditCardBin
     */
    public function setCreditCardBin(?string $creditCardBin)
    {
        $this->creditCardBin = $creditCardBin;
    }

    /**
     * @return string
     */
    public function getCvvResultCode(): ?string
    {
        return $this->cvvResultCode;
    }

    /**
     * @param string $cvvResultCode
     */
    public function setCvvResultCode(?string $cvvResultCode)
    {
        $this->cvvResultCode = $cvvResultCode;
    }

    /**
     * @return string
     */
    public function getCreditCardNumber(): ?string
    {
        return $this->creditCardNumber;
    }

    /**
     * @param string $creditCardNumber
     */
    public function setCreditCardNumber(?string $creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;
    }

    /**
     * @return string
     */
    public function getCreditCardCompany(): ?string
    {
        return $this->creditCardCompany;
    }

    /**
     * @param string $creditCardCompany
     */
    public function setCreditCardCompany(?string $creditCardCompany)
    {
        $this->creditCardCompany = $creditCardCompany;
    }
}
