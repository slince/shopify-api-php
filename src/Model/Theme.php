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

class Theme extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var int
     */
    protected $themeStoreId;

    /**
     * @var bool
     */
    protected $previewable;

    /**
     * @var bool
     */
    protected $processing;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Theme
     */
    public function setName($name)
    {
        $this->name = $name;


    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return Theme
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;


    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return Theme
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;


    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     *
     * @return Theme
     */
    public function setRole($role)
    {
        $this->role = $role;


    }

    /**
     * @return int
     */
    public function getThemeStoreId()
    {
        return $this->themeStoreId;
    }

    /**
     * @param int $themeStoreId
     *
     * @return Theme
     */
    public function setThemeStoreId($themeStoreId)
    {
        $this->themeStoreId = $themeStoreId;


    }

    /**
     * @return bool
     */
    public function isPreviewable()
    {
        return $this->previewable;
    }

    /**
     * @param bool $previewable
     *
     * @return Theme
     */
    public function setPreviewable($previewable)
    {
        $this->previewable = $previewable;


    }

    /**
     * @return bool
     */
    public function isProcessing()
    {
        return $this->processing;
    }

    /**
     * @param bool $processing
     *
     * @return Theme
     */
    public function setProcessing($processing)
    {
        $this->processing = $processing;


    }
}