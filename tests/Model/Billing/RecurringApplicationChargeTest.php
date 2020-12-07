<?php

namespace Slince\Shopify\Tests\Model\Billing;

use Slince\Shopify\Model\Billing\RecurringApplicationCharge;
use Slince\Shopify\Tests\Model\ModelTestCase;

class RecurringApplicationChargeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return RecurringApplicationCharge::class;
    }
}