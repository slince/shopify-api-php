<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Redirect;

use Slince\Shopify\Common\Model\Model;

class Redirect extends Model
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $target;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return Redirect
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     *
     * @return Redirect
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }
}