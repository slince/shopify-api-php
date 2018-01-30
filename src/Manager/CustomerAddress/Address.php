<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\CustomerAddress;

use Slince\Shopify\Common\Model\Model;

class Address extends Model
{
    use AddressTrait;

    /**
     * @var int
     */
    protected $customerId;

    /**
     * @var bool
     */
    protected $default;

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     *
     * @return Address
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->default;
    }

    /**
     * @param bool $default
     *
     * @return Address
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }
}