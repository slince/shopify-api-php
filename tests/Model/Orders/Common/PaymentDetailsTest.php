<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\PaymentDetails;
use Slince\Shopify\Tests\Model\ModelTestCase;

class PaymentDetailsTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return PaymentDetails::class;
    }
}