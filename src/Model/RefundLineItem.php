<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Model;

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
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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
     */
    public function setLineItemId($lineItemId)
    {
        $this->lineItemId = $lineItemId;
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
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
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
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;
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
     */
    public function setLineItem(LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
    }
}
