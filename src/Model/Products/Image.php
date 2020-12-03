<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ProductImage;

class Image
{
    /**
     * @var int
     */
    protected $productId;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var int
     */
    protected $width;

    /**
     * @var int
     */
    protected $height;

    /**
     * @var string
     */
    protected $src;

    /**
     * @var array
     */
    protected $variantIds;

    /**
     * @var string
     */
    protected $alt;


    /**
     * @var string
     */
    protected $adminGraphqlApiId;

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

     */
    public function setProductId($productId)
    {
        $this->productId = $productId;


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

     */
    public function setPosition($position)
    {
        $this->position = $position;


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

     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;


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

     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;


    }

    /**
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param string $src
     *

     */
    public function setSrc($src)
    {
        $this->src = $src;


    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *

     */
    public function setWidth($width)
    {
        $this->width = $width;


    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *

     */
    public function setHeight($height)
    {
        $this->height = $height;


    }

    /**
     * @return array
     */
    public function getVariantIds()
    {
        return $this->variantIds;
    }

    /**
     * @param array $variantIds
     *

     */
    public function setVariantIds($variantIds)
    {
        $this->variantIds = $variantIds;


    }

    /**
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;


    }
}