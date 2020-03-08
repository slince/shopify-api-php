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

class Article extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $bodyHtml;

    /**
     * @var int
     */
    protected $blogId;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $publishedAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $summaryHtml;

    /**
     * @var string
     */
    protected $templateSuffix;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var string
     */
    protected $tags;

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

     */
    public function setTitle($title)
    {
        $this->title = $title;

  
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

     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

  
    }

    /**
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->bodyHtml;
    }

    /**
     * @param string $bodyHtml
     *

     */
    public function setBodyHtml($bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;

  
    }

    /**
     * @return int
     */
    public function getBlogId()
    {
        return $this->blogId;
    }

    /**
     * @param int $blogId
     *

     */
    public function setBlogId($blogId)
    {
        $this->blogId = $blogId;

  
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     *

     */
    public function setAuthor($author)
    {
        $this->author = $author;

  
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *

     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

  
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTime $publishedAt
     *

     */
    public function setPublishedAt(\DateTime $publishedAt)
    {
        $this->publishedAt = $publishedAt;

  
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

     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

  
    }

    /**
     * @return string
     */
    public function getSummaryHtml()
    {
        return $this->summaryHtml;
    }

    /**
     * @param string $summaryHtml
     *

     */
    public function setSummaryHtml($summaryHtml)
    {
        $this->summaryHtml = $summaryHtml;

  
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

     */
    public function setTemplateSuffix($templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;

  
    }

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

     */
    public function setHandle($handle)
    {
        $this->handle = $handle;

  
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

     */
    public function setTags($tags)
    {
        $this->tags = $tags;

  
    }
}