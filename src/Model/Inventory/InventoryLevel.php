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

namespace Slince\Shopify\Model\Inventory;

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
    public function getInventoryItemId(): ?int
    {
        return $this->inventoryItemId;
    }

    /**
     * @param int $inventoryItemId
     */
    public function setInventoryItemId(?int $inventoryItemId)
    {
        $this->inventoryItemId = $inventoryItemId;
    }

    /**
     * @return int
     */
    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId(?int $locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return int
     */
    public function getAvailable(): ?int
    {
        return $this->available;
    }

    /**
     * @param int $available
     */
    public function setAvailable(?int $available)
    {
        $this->available = $available;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId(): ?string
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(?string $adminGraphqlApiId)
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
    }
}
