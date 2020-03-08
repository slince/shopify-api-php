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

class PaymentDetails
{
    /**
     * @var string
     */
    protected $creditCardBin;

    /**
     * @var string
     */
    protected $avsResultCode;

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
    public function getCreditCardBin()
    {
        return $this->creditCardBin;
    }

    /**
     * @param string $creditCardBin
     */
    public function setCreditCardBin($creditCardBin)
    {
        $this->creditCardBin = $creditCardBin;
    }

    /**
     * @return string
     */
    public function getAvsResultCode()
    {
        return $this->avsResultCode;
    }

    /**
     * @param string $avsResultCode
     */
    public function setAvsResultCode($avsResultCode)
    {
        $this->avsResultCode = $avsResultCode;
    }

    /**
     * @return string
     */
    public function getCvvResultCode()
    {
        return $this->cvvResultCode;
    }

    /**
     * @param string $cvvResultCode
     */
    public function setCvvResultCode($cvvResultCode)
    {
        $this->cvvResultCode = $cvvResultCode;
    }

    /**
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    /**
     * @param string $creditCardNumber
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;
    }

    /**
     * @return string
     */
    public function getCreditCardCompany()
    {
        return $this->creditCardCompany;
    }

    /**
     * @param string $creditCardCompany
     */
    public function setCreditCardCompany($creditCardCompany)
    {
        $this->creditCardCompany = $creditCardCompany;
    }
}
