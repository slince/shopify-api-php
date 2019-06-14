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
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
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
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
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
     */
    public function setCommentable($commentable)
    {
        $this->commentable = $commentable;
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
     */
    public function setFeedburner($feedburner)
    {
        $this->feedburner = $feedburner;
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
     */
    public function setFeedburnerLocation($feedburnerLocation)
    {
        $this->feedburnerLocation = $feedburnerLocation;
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
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
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
     */
    public function setTemplateSuffix($templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;
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
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
}