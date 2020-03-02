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

use Slince\Shopify\Common\Model\Model;

class DiscountAllocation extends Model
{
    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $discountApplicationIndex;

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     *                                                                
     * @return DiscountAllocation
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountApplicationIndex()
    {
        return $this->discountApplicationIndex;
    }

    /**
     * @param string $discountApplicationIndex
     *                                                                
     * @return DiscountAllocation
     */
    public function setDiscountApplicationIndex($discountApplicationIndex)
    {
        $this->discountApplicationIndex = $discountApplicationIndex;

        return $this;
    }
}