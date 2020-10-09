<?php


namespace Slince\Shopify\Resource\Orders\Common;

use Slince\Shopify\Resource\Common\PriceSet;

class DiscountAllocation
{
    /**
     * @var string
     */
    protected $amount;

    /**
     * @var int
     */
    protected $discountApplicationIndex;

    /**
     * @var PriceSet
     */
    protected $amountSet;

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getDiscountApplicationIndex(): int
    {
        return $this->discountApplicationIndex;
    }

    /**
     * @param int $discountApplicationIndex
     */
    public function setDiscountApplicationIndex(int $discountApplicationIndex): void
    {
        $this->discountApplicationIndex = $discountApplicationIndex;
    }

    /**
     * @return PriceSet
     */
    public function getAmountSet(): PriceSet
    {
        return $this->amountSet;
    }

    /**
     * @param PriceSet $amountSet
     */
    public function setAmountSet(PriceSet $amountSet): void
    {
        $this->amountSet = $amountSet;
    }
}