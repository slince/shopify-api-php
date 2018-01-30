<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Common\Manager;

interface ManagerInterface
{
    /**
     * Gets the service name.
     *
     * @return string
     */
    public static function getServiceName();
}