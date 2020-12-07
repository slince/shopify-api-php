<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\CurrencyExchangeAdjustment;
use Slince\Shopify\Tests\Model\ModelTestCase;

class CurrencyExchangeAdjustmentTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return CurrencyExchangeAdjustment::class;
    }
}