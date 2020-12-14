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

namespace Slince\Shopify\Model\Store;

class Currency
{
    /**
     * @var string
     */
    protected $currency;

    /**
     * @var \DateTimeInterface
     */
    protected $rateUpdatedAt;

    /**
     * @var bool
     */
    protected $enabled;

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getRateUpdatedAt(): \DateTimeInterface
    {
        return $this->rateUpdatedAt;
    }

    /**
     * @param \DateTimeInterface $rateUpdatedAt
     */
    public function setRateUpdatedAt(\DateTimeInterface $rateUpdatedAt): void
    {
        $this->rateUpdatedAt = $rateUpdatedAt;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }
}
