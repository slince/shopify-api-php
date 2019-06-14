<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\InventoryLevel;

class InventoryLevel
{
    /**
     * @var int
     */
    protected $inventoryItemId;

    /**
     * @var int
     */
    protected $locationId;

    /**
     * @var int
     */
    protected $available;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @return int
     */
    public function getInventoryItemId()
    {
        return $this->inventoryItemId;
    }

    /**
     * @param int $inventoryItemId
     *                                                                
     * @return InventoryLevel
     */
    public function setInventoryItemId($inventoryItemId)
    {
        $this->inventoryItemId = $inventoryItemId;

        return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     *                                                                
     * @return InventoryLevel
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param int $available
     *                                                                
     * @return InventoryLevel
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     *                                                                
     * @return InventoryLevel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId()
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     *                                                                
     * @return InventoryLevel
     */
    public function setAdminGraphqlApiId($adminGraphqlApiId)
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;

        return $this;
    }
}