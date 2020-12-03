<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Province;

use Slince\Shopify\Common\Manager\NestCrudable;

class ProvinceManager extends NestCrudable implements ProvinceManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'provinces';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Province::class;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($countryId, $id)
    {
        return new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function create($countryId, array $data)
    {
        return new \Exception('The method is not supported');
    }
}