<?php

namespace Slince\Shopify\Tests\Model\Common;

use Slince\Shopify\Model\Common\Price;
use Slince\Shopify\Tests\Model\ModelTestCase;

class PriceTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Price::class;
    }
}