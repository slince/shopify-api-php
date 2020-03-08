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
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $bodyHtml;

    /**
     * @var DateTime
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
     * @return SmartCollection
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

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

    }

    /**
     * @return DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param DateTime $publishedAt
     * @return SmartCollection
     */
    public function setPublishedAt(DateTime $publishedAt)
    {
        $this->publishedAt = $publishedAt;

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

    }
}