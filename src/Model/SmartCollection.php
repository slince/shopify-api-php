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
     * @var bool
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
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

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
     */
    public function setPublishedScope($publishedScope)
    {
        $this->publishedScope = $publishedScope;
    }

    /**
Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param SmartCollectionImage $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}
