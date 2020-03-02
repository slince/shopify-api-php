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

class DiscountApplication extends Model
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var string
     */
    protected $allocationMethod;

    /**
     * @var string
     */
    protected $targetSelection;

    /**
     * @var string
     */
    protected $targetType;

    /**
     * @var string
     */
    protected $code;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *                                                                
     * @return DiscountApplication
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *                                                                
     * @return DiscountApplication
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * @param string $valueType
     *                                                                
     * @return DiscountApplication
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllocationMethod()
    {
        return $this->allocationMethod;
    }

    /**
     * @param string $allocationMethod
     *                                                                
     * @return DiscountApplication
     */
    public function setAllocationMethod($allocationMethod)
    {
        $this->allocationMethod = $allocationMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetSelection()
    {
        return $this->targetSelection;
    }

    /**
     * @param string $targetSelection
     *                                                                
     * @return DiscountApplication
     */
    public function setTargetSelection($targetSelection)
    {
        $this->targetSelection = $targetSelection;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * @param string $targetType
     *                                                                
     * @return DiscountApplication
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;

        return $this;
    }

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
     * @return DiscountApplication
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}