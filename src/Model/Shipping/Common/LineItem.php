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


namespace Slince\Shopify\Model\Shipping\Common;

class LineItem
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $shopId;

    /**
     * @var int
     */
    protected $fulfillmentOrderId;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $lineItemId;

    /**
     * @var int
     */
    protected $fulfillableQuantity;

    /**
     * @var int
     */
    protected $variantId;

    /**
     * @return int
     */
    public function getId(): ?int
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
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(int $shopId): void
    {
        $this->shopId = $shopId;
    }

    /**
     * @return int
     */
    public function getFulfillmentOrderId(): ?int
    {
        return $this->fulfillmentOrderId;
    }

    /**
     * @param int $fulfillmentOrderId
     */
    public function setFulfillmentOrderId(int $fulfillmentOrderId): void
    {
        $this->fulfillmentOrderId = $fulfillmentOrderId;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getLineItemId(): ?int
    {
        return $this->lineItemId;
    }

    /**
     * @param int $lineItemId
     */
    public function setLineItemId(int $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @return int
     */
    public function getFulfillableQuantity(): ?int
    {
        return $this->fulfillableQuantity;
    }

    /**
     * @param int $fulfillableQuantity
     */
    public function setFulfillableQuantity(int $fulfillableQuantity): void
    {
        $this->fulfillableQuantity = $fulfillableQuantity;
    }

    /**
     * @return int
     */
    public function getVariantId(): ?int
    {
        return $this->variantId;
    }

    /**
     * @param int $variantId
     */
    public function setVariantId(int $variantId): void
    {
        $this->variantId = $variantId;
    }
}
