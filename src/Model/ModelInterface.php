<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Common\Model;

interface ModelInterface
{
    /**
     * Gets the id of the model.
     *
     * @return int
     */
    public function getId();

    /**
     * Sets the id for the model.
     *
     * @param int $id
     *
     * @return ModelInterface
     */
    public function setId($id);
}