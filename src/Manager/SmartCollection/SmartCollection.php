<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\SmartCollection;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;

class SmartCollection extends Model
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
    protected $bodyHtml;

    /**
     * @var \DateTimeInterface
     */
    protected $publishedAt;

    /**
     * @var string
     */
    protected $sortOrder;

    /**
     * @var string
     */
    protected $templateSuffix;

    /**
     * @var boolean
     */
    protected $disjunctive;

    /**
     * @var array
     */
    protected $rules;

    /**
     * @var string
     */
    protected $publishedScope;

    /**
     * @var SmartCollectionImage
     */
    protected $image;

    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     * @return SmartCollection
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
     * @return SmartCollection
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
     * @return SmartCollection
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
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
     * @return SmartCollection
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTimeInterface $publishedAt
     * @return SmartCollection
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return SmartCollection
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
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
     * @return SmartCollection
     */
    public function setTemplateSuffix($templateSuffix)
    {
        $this->templateSuffix = $templateSuffix;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisjunctive()
    {
        return $this->disjunctive;
    }

    /**
     * @param bool $disjunctive
     * @return SmartCollection
     */
    public function setDisjunctive($disjunctive)
    {
        $this->disjunctive = $disjunctive;
        return $this;
    }

    /**
     * @return array
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param array $rules
     * @return SmartCollection
     */
    public function setRules($rules)
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedScope()
    {
        return $this->publishedScope;
    }

    /**
     * @param string $publishedScope
     * @return SmartCollection
     */
    public function setPublishedScope($publishedScope)
    {
        $this->publishedScope = $publishedScope;
        return $this;
    }

    /**
     * @return SmartCollectionImage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param SmartCollectionImage $image
     * @return SmartCollection
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
}