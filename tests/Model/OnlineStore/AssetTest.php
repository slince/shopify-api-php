<?php

namespace Slince\Shopify\Tests\Model\OnlineStore;

use Slince\Shopify\Model\OnlineStore\Asset;
use Slince\Shopify\Tests\Model\ModelTestCase;

class AssetTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Asset::class;
    }
}