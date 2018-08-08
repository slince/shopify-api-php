<?php

namespace Slince\Shopify\Tests\RecurringApplicationCharge;

use Slince\Shopify\Manager\RecurringApplicationCharge\RecurringApplicationCharge;
use Slince\Shopify\Tests\Base\ModelTestCase;

class RecurringApplicationChargeTest extends ModelTestCase
{
    public function getModelClass()
    {
        return RecurringApplicationCharge::class;
    }
}