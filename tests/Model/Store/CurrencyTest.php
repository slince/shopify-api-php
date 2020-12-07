<?php

namespace Slince\Shopify\Tests\Model\Store;

use Slince\Shopify\Model\Store\Currency;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CurrencyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Currency::class;
    }
}