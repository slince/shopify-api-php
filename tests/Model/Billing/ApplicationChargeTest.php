<?php

namespace Slince\Shopify\Tests\Model\Billing;

use Slince\Shopify\Model\Billing\ApplicationCharge;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ApplicationChargeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ApplicationCharge::class;
    }
}