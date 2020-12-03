<?php


namespace Slince\Shopify\Model\Orders\Common;

use Slince\Shopify\Model\Common\PriceSet;

class Duty
{
    /**
     * @var int
     */
    protected $dutyId;

    /**
     * @var PriceSet
     */
    protected $amountSet;

    /**
     * @return int
     */
    public function getDutyId(): int
    {
        return $this->dutyId;
    }

    /**
     * @param int $dutyId
     */
    public function setDutyId(int $dutyId): void
    {
        $this->dutyId = $dutyId;
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