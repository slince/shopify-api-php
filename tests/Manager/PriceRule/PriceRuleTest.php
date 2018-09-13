<?php

namespace Slince\Shopify\Tests\PriceRule;

use Slince\Shopify\Manager\PriceRule\PriceRule;
use Slince\Shopify\Tests\Base\ModelTestCase;

class PriceRuleTest extends ModelTestCase
{
    public function getModelClass()
    {
        return PriceRule::class;
    }
}