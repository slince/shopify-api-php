<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ScriptTag;

use Slince\Shopify\Common\Model\Model;

class ScriptTag extends Model
{
    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $event;

    /**
     * @var string
     */
    protected $src;

    /**
     * @var string
     */
    protected $displayScope;

    /**
     * @var string
     */
    protected $updatedAt;

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
     * @return ScriptTag
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $event
     *
     * @return ScriptTag
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param string $src
     *
     * @return ScriptTag
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayScope()
    {
        return $this->displayScope;
    }

    /**
     * @param string $displayScope
     *
     * @return ScriptTag
     */
    public function setDisplayScope($displayScope)
    {
        $this->displayScope = $displayScope;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return ScriptTag
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}