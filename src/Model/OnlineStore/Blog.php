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

namespace Slince\Shopify\Model\OnlineStore;

class Blog
{
    /**
     * @var int
     */
    protected $id;

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
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     */
    public function setHandle(?string $handle)
    {
        $this->handle = $handle;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;
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
    public function getCommentable(): ?string
    {
        return $this->commentable;
    }

    /**
     * @param string $commentable
     */
    public function setCommentable(?string $commentable)
    {
        $this->commentable = $commentable;
    }

    /**
     * @return string
     */
    public function getFeedburner(): ?string
    {
        return $this->feedburner;
    }

    /**
     * @param string $feedburner
     */
    public function setFeedburner(?string $feedburner)
    {
        $this->feedburner = $feedburner;
    }

    /**
     * @return string
     */
    public function getFeedburnerLocation(): ?string
    {
        return $this->feedburnerLocation;
    }

    /**
     * @param string $feedburnerLocation
     */
    public function setFeedburnerLocation(?string $feedburnerLocation)
    {
        $this->feedburnerLocation = $feedburnerLocation;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getTemplateSuffix(): ?string
    {
        return $this->templateSuffix;
    }

    /**
     * @param string $templateSuffix
     */
    public function setTemplateSuffix(?string $templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;
    }

    /**
     * @return string
     */
    public function getTags(): ?string
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     */
    public function setTags(?string $tags)
    {
        $this->tags = $tags;
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
