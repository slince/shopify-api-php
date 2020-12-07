<?php

namespace Slince\Shopify\Tests\Model\Shipping\Common;

use Slince\Shopify\Model\Shipping\Common\MerchantRequest;
use Slince\Shopify\Tests\Model\ModelTestCase;

class MerchantRequestTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return MerchantRequest::class;
    }
}