<?php


namespace Slince\Shopify\Model\Inventory;

use DateTimeInterface;

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
     * @var DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @return int
     */
    public function getInventoryItemId(): int
    {
        return $this->inventoryItemId;
    }

    /**
     * @param int $inventoryItemId
     */
    public function setInventoryItemId(int $inventoryItemId): void
    {
        $this->inventoryItemId = $inventoryItemId;
    }

    /**
     * @return int
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * @param int $locationId
     */
    public function setLocationId(int $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * @return int
     */
    public function getAvailable(): int
    {
        return $this->available;
    }

    /**
     * @param int $available
     */
    public function setAvailable(int $available): void
    {
        $this->available = $available;
    }

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId(): string
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(string $adminGraphqlApiId): void
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
    }
}