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

namespace Slince\Shopify\Service\Products;

class SmartCollectionManager extends GeneralCurdable implements SmartCollectionManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'smart_collections';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'smart_collection';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return SmartCollection::class;
    }
}