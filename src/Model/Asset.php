<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Model;

use DateTime;

class Asset
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $publicUrl;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $contentType;

    /**
     * @var number
     */
    protected $size;

    /**
     * @var int
     */
    protected $themeId;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     *

     */
    public function setKey($key)
    {
        $this->key = $key;


    }

    /**
     * @return string
     */
    public function getPublicUrl()
    {
        return $this->publicUrl;
    }

    /**
     * @param string $publicUrl
     *

     */
    public function setPublicUrl($publicUrl)
    {
        $this->publicUrl = $publicUrl;


    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *

     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;


    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *

     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;


    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     *

     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;


    }

    /**
     * @return number
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param number $size
     *

     */
    public function setSize($size)
    {
        $this->size = $size;


    }

    /**
     * @return int
     */
    public function getThemeId()
    {
        return $this->themeId;
    }

    /**
     * @param int $themeId
     *

     */
    public function setThemeId($themeId)
    {
        $this->themeId = $themeId;


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

     */
    public function setValue($value)
    {
        $this->value = $value;


    }
}