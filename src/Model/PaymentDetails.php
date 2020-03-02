<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Order;

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
     *
     * @return PaymentDetails
     */
    public function setCreditCardBin($creditCardBin)
    {
        $this->creditCardBin = $creditCardBin;

        return $this;
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
     *
     * @return PaymentDetails
     */
    public function setAvsResultCode($avsResultCode)
    {
        $this->avsResultCode = $avsResultCode;

        return $this;
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
     *
     * @return PaymentDetails
     */
    public function setCvvResultCode($cvvResultCode)
    {
        $this->cvvResultCode = $cvvResultCode;

        return $this;
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
     *
     * @return PaymentDetails
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;

        return $this;
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
     *
     * @return PaymentDetails
     */
    public function setCreditCardCompany($creditCardCompany)
    {
        $this->creditCardCompany = $creditCardCompany;

        return $this;
    }
}