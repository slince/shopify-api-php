<?php


namespace Slince\Shopify\Resource\Common;

class PriceSet
{
    /**
     * @var Price
     */
    protected $shopMoney;

    /**
     * @var Price
     */
    protected $presentmentMoney;

    /**
     * @return Price
     */
    public function getShopMoney(): Price
    {
        return $this->shopMoney;
    }

    /**
     * @param Price $shopMoney
     */
    public function setShopMoney(Price $shopMoney): void
    {
        $this->shopMoney = $shopMoney;
    }

    /**
     * @return Price
     */
    public function getPresentmentMoney(): Price
    {
        return $this->presentmentMoney;
    }

    /**
     * @param Price $presentmentMoney
     */
    public function setPresentmentMoney(Price $presentmentMoney): void
    {
        $this->presentmentMoney = $presentmentMoney;
    }
}