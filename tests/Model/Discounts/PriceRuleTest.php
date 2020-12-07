<?php

namespace Slince\Shopify\Tests\Model\Discounts;

use Slince\Shopify\Model\Discounts\PriceRule;
use Slince\Shopify\Tests\Model\ModelTestCase;

class PriceRuleTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return PriceRule::class;
    }
}