<?php

namespace Slince\Shopify\Model\Orders\Common;

class CurrencyExchangeAdjustment
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $adjustment;

    /**
     * @var string
     */
    protected $originalAmount;

    /**
     * @var string
     */
    protected $finalAmount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAdjustment(): string
    {
        return $this->adjustment;
    }

    /**
     * @param string $adjustment
     */
    public function setAdjustment(string $adjustment): void
    {
        $this->adjustment = $adjustment;
    }

    /**
     * @return string
     */
    public function getOriginalAmount(): string
    {
        return $this->originalAmount;
    }

    /**
     * @param string $originalAmount
     */
    public function setOriginalAmount(string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * @return string
     */
    public function getFinalAmount(): string
    {
        return $this->finalAmount;
    }

    /**
     * @param string $finalAmount
     */
    public function setFinalAmount(string $finalAmount): void
    {
        $this->finalAmount = $finalAmount;
    }

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
}