<?php


namespace Slince\Shopify\Model\Store;

use DateTimeInterface;

class Currency
{
    /**
     * @var string
     */
    protected $currency;

    /**
     * @var DateTimeInterface
     */
    protected $rateUpdatedAt;

    /**
     * @var boolean
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
     * @return DateTimeInterface
     */
    public function getRateUpdatedAt(): DateTimeInterface
    {
        return $this->rateUpdatedAt;
    }

    /**
     * @param DateTimeInterface $rateUpdatedAt
     */
    public function setRateUpdatedAt(DateTimeInterface $rateUpdatedAt): void
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