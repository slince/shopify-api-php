<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Theme;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;

class Theme extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
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
     * @return Theme
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
     * @return Theme
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
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

        return $this;
    }
}