<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Store;

use Slince\Shopify\Model\Store\Province;
use Slince\Shopify\Service\Common\NestCrudManager;

class ProvinceManager extends NestCrudManager implements ProvinceManagerInterface
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
        throw new \Exception('The method is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function create($countryId, array $data)
    {
        throw new \Exception('The method is not supported');
    }
}
