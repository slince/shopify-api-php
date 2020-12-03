<?php


namespace Slince\Shopify\Model\Orders\Common;

use Slince\Shopify\Model\Common\PriceSet;

class RefundLineItem
{
    /**
     * @var int
     */
    protected $id;

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
    protected $locationId;

    /**
     * @var string
     */
    protected $restockType;

    /**
     * @var float
     */
    protected $subtotal;

    /**
     * @var float
     */
    protected $totalTax;

    /**
     * @var PriceSet
     */
    protected $subtotalSet;

    /**
     * @var PriceSet
     */
    protected $totalTaxSet;

    /**
     * @var LineItem
     */
    protected $lineItem;

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
     * @return int
     */
    public function getQuantity(): int
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
    public function getLineItemId(): int
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
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId(int $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * @return string
     */
    public function getRestockType(): string
    {
        return $this->restockType;
    }

    /**
     * @param string $restockType
     */
    public function setRestockType(string $restockType): void
    {
        $this->restockType = $restockType;
    }

    /**
     * @return float
     */
    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    /**
     * @param float $subtotal
     */
    public function setSubtotal(float $subtotal): void
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @return float
     */
    public function getTotalTax(): float
    {
        return $this->totalTax;
    }

    /**
     * @param float $totalTax
     */
    public function setTotalTax(float $totalTax): void
    {
        $this->totalTax = $totalTax;
    }

    /**
     * @return PriceSet
     */
    public function getSubtotalSet(): PriceSet
    {
        return $this->subtotalSet;
    }

    /**
     * @param PriceSet $subtotalSet
     */
    public function setSubtotalSet(PriceSet $subtotalSet): void
    {
        $this->subtotalSet = $subtotalSet;
    }

    /**
     * @return PriceSet
     */
    public function getTotalTaxSet(): PriceSet
    {
        return $this->totalTaxSet;
    }

    /**
     * @param PriceSet $totalTaxSet
     */
    public function setTotalTaxSet(PriceSet $totalTaxSet): void
    {
        $this->totalTaxSet = $totalTaxSet;
    }

    /**
     * @return LineItem
     */
    public function getLineItem(): LineItem
    {
        return $this->lineItem;
    }

    /**
     * @param LineItem $lineItem
     */
    public function setLineItem(LineItem $lineItem): void
    {
        $this->lineItem = $lineItem;
    }
}
