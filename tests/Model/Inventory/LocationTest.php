<?php

namespace Slince\Shopify\Tests\Model\Inventory;

use Slince\Shopify\Model\Inventory\Location;
use Slince\Shopify\Tests\Model\ModelTestCase;

class LocationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Location::class;
    }
}