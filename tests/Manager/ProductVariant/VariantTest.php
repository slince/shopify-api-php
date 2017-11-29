<?php

namespace Slince\Shopify\Tests\Variant;

use Slince\Shopify\Manager\ProductVariant\Variant;
use Slince\Shopify\Tests\Base\ModelTestCase;

class VariantTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Variant::class;
    }
}