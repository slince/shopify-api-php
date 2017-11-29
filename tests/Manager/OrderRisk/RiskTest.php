<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\OrderRisk\Risk;
use Slince\Shopify\Tests\Base\ModelTestCase;

class RiskTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Risk::class;
    }
}