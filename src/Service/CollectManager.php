<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Collect;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class CollectManager extends GeneralCurdable implements CollectManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'collects';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'collect';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Collect::class;
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        return new \Exception('The method is not supported');
    }
}