<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\RefundDuty;
use Slince\Shopify\Tests\Model\ModelTestCase;

class RefundDutyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return RefundDuty::class;
    }
}