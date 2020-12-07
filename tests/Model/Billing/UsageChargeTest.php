<?php

namespace Slince\Shopify\Tests\Model\Billing;

use Slince\Shopify\Model\Billing\UsageCharge;
use Slince\Shopify\Tests\Model\ModelTestCase;

class UsageChargeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return UsageCharge::class;
    }
}