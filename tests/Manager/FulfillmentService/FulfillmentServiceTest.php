<?php

namespace Slince\Shopify\Tests\FulfillmentService;

use Slince\Shopify\Manager\FulfillmentService\FulfillmentService;
use Slince\Shopify\Tests\Base\ModelTestCase;

class FulfillmentServiceTest extends ModelTestCase
{
    public function getModelClass()
    {
        return FulfillmentService::class;
    }
}