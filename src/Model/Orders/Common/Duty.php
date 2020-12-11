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
    public function getDutyId(): ?int
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
