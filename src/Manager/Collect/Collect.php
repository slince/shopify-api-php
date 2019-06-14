<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Collect;

use Slince\Shopify\Common\Model\Model;

class Collect extends Model
{
    /**
     * @var int
     */
    protected $collectionId;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $featured;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var int
     */
    protected $productId;

    /**
     * @var int
     */
    protected $sortValue;

    /**
     * @return int
     */
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    /**
     * @param int $collectionId
     *
     * @return Collect
     */
    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;

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
     * @return Collect
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

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
     * @return Collect
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFeatured()
    {
        return $this->featured;
    }

    /**
     * @param bool $featured
     *
     * @return Collect
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return Collect
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     *
     * @return Collect
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSortValue()
    {
        return $this->sortValue;
    }

    /**
     * @param int $sortValue
     *
     * @return Collect
     */
    public function setSortValue($sortValue)
    {
        $this->sortValue = $sortValue;

        return $this;
    }
}