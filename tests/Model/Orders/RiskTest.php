<?php

namespace Slince\Shopify\Tests\Model\Orders;

use Slince\Shopify\Model\Orders\Risk;
use Slince\Shopify\Tests\Model\ModelTestCase;

class RiskTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Risk::class;
    }
}