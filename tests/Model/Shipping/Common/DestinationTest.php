<?php

namespace Slince\Shopify\Tests\Model\Shipping\Common;

use Slince\Shopify\Model\Shipping\Common\Destination;
use Slince\Shopify\Tests\Model\ModelTestCase;

class DestinationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Destination::class;
    }
}