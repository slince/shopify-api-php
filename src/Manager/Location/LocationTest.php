<?php

namespace Slince\Shopify\Tests\Location;

use Slince\Shopify\Manager\Location\Location;
use Slince\Shopify\Tests\Base\ModelTestCase;

class LocationTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Location::class;
    }
}