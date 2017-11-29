<?php

namespace Slince\Shopify\Tests\CarrierService;

use Slince\Shopify\Manager\CarrierService\CarrierService;
use Slince\Shopify\Tests\Base\ModelTestCase;

class CarrierServiceTest extends ModelTestCase
{
    public function getModelClass()
    {
        return CarrierService::class;
    }
}