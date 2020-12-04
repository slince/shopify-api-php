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

namespace Slince\Shopify\Model\Common;

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
