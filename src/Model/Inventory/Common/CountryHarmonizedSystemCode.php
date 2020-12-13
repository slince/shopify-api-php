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

namespace Slince\Shopify\Model\Inventory\Common;

class CountryHarmonizedSystemCode
{
    /**
     * @var string
     */
    protected $harmonizedSystemCode;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @return string
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }

    /**
     * @param string $harmonizedSystemCode
     */
    public function setHarmonizedSystemCode(string $harmonizedSystemCode): void
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;
    }

    /**
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }
}