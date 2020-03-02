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

trait AdminGraphqlApiId
{
    /**
     * @var string
     */
    private $adminGraphqlApiId;

    /**
     * @return string
     */
    public function getAdminGraphqlApiId()
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     *                                                                
     * @return self
     */
    public function setAdminGraphqlApiId($adminGraphqlApiId)
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;

        return $this;
    }
}