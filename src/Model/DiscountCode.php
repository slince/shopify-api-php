<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\DiscountCode;

use Slince\Shopify\Common\Model\Model;

class DiscountCode extends Model
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var int
     */
    protected $priceRuleId;

    /**
     * @var int
     */
    protected $usageCount;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return DiscountCode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     *
     * @return DiscountCode
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriceRuleId()
    {
        return $this->priceRuleId;
    }

    /**
     * @param int $priceRuleId
     *
     * @return DiscountCode
     */
    public function setPriceRuleId($priceRuleId)
    {
        $this->priceRuleId = $priceRuleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getUsageCount()
    {
        return $this->usageCount;
    }

    /**
     * @param int $usageCount
     *
     * @return DiscountCode
     */
    public function setUsageCount($usageCount)
    {
        $this->usageCount = $usageCount;

        return $this;
    }

}