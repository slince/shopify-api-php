<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Refund;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Manager\Order\LineItem;

class RefundLineItem extends Model
{
    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $lineItemId;

    /**
     * @var float
     */
    protected $subtotal;

    /**
     * @var float
     */
    protected $totalTax;

    /**
     * @var LineItem
     */
    protected $lineItem;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return RefundLineItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     *
     * @return RefundLineItem
     */
    public function setLineItemId($lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param float $subtotal
     *
     * @return RefundLineItem
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * @param float $totalTax
     *
     * @return RefundLineItem
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * @return LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param LineItem $lineItem
     *
     * @return RefundLineItem
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }
}
