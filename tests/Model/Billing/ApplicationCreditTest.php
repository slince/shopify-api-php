<?php

namespace Slince\Shopify\Tests\Model\Billing;

use Slince\Shopify\Model\Billing\ApplicationCredit;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ApplicationCreditTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ApplicationCredit::class;
    }
}