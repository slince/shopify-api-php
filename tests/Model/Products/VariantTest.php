<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\Variant;
use Slince\Shopify\Tests\Model\ModelTestCase;

class VariantTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Variant::class;
    }
}