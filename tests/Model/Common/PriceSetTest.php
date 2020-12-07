<?php

namespace Slince\Shopify\Tests\Model\Common;

use Slince\Shopify\Model\Common\PriceSet;
use Slince\Shopify\Tests\Model\ModelTestCase;

class PriceSetTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return PriceSet::class;
    }
}