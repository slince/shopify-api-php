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

class GiftCard extends Model
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $linnItemId;

    /**
     * @var string
     */
    protected $maskedCode;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getLinnItemId()
    {
        return $this->linnItemId;
    }

    /**
     * @param int $linnItemId
     */
    public function setLinnItemId($linnItemId)
    {
        $this->linnItemId = $linnItemId;
    }

    /**
     * @return string
     */
    public function getMaskedCode()
    {
        return $this->maskedCode;
    }

    /**
     * @param string $maskedCode
     */
    public function setMaskedCode($maskedCode)
    {
        $this->maskedCode = $maskedCode;
    }

}