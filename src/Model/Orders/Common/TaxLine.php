<?php


namespace Slince\Shopify\Resource\Orders\Common;

use Slince\Shopify\Resource\Common\PriceSet;

class TaxLine
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var float
     */
    protected $rate;

    /**
     * @var PriceSet
     */
    protected $priceSet;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return PriceSet
     */
    public function getPriceSet(): PriceSet
    {
        return $this->priceSet;
    }

    /**
     * @param PriceSet $priceSet
     */
    public function setPriceSet(PriceSet $priceSet): void
    {
        $this->priceSet = $priceSet;
    }
}