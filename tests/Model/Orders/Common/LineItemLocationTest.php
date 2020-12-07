<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\LineItemLocation;
use Slince\Shopify\Tests\Model\ModelTestCase;

class LineItemLocationTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItemLocation::class;
    }
}