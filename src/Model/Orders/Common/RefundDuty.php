<?php


namespace Slince\Shopify\Model\Orders\Common;

class RefundDuty
{
    /**
     * @var int
     */
    protected $dutyId;

    /**
     * @var string
     */
    protected $refundType;

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
     * @return string
     */
    public function getRefundType(): string
    {
        return $this->refundType;
    }

    /**
     * @param string $refundType
     */
    public function setRefundType(string $refundType): void
    {
        $this->refundType = $refundType;
    }
}