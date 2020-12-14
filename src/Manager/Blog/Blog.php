<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Blog;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;

class Blog extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $commentable;

    /**
     * @var string
     */
    protected $feedburner;

    /**
     * @var string
     */
    protected $feedburnerLocation;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $templateSuffix;

    /**
     * @var string
     */
    protected $tags;

    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     *
     * @return Blog
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @return Blog
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommentable()
    {
        return $this->commentable;
    }

    /**
     * @param string $commentable
     *
     * @return Blog
     */
    public function setCommentable($commentable)
    {
        $this->commentable = $commentable;

        return $this;
    }

    /**
     * @return string
     */
    public function getFeedburner()
    {
        return $this->feedburner;
    }

    /**
     * @param string $feedburner
     *
     * @return Blog
     */
    public function setFeedburner($feedburner)
    {
        $this->feedburner = $feedburner;

        return $this;
    }

    /**
     * @return string
     */
    public function getFeedburnerLocation()
    {
        return $this->feedburnerLocation;
    }

    /**
     * @param string $feedburnerLocation
     *
     * @return Blog
     */
    public function setFeedburnerLocation($feedburnerLocation)
    {
        $this->feedburnerLocation = $feedburnerLocation;

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
     * @return Blog
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateSuffix()
    {
        return $this->templateSuffix;
    }

    /**
     * @param string $templateSuffix
     *
     * @return Blog
     */
    public function setTemplateSuffix($templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     *
     * @return Blog
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
