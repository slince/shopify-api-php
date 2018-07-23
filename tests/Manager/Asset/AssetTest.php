<?php

namespace Slince\Shopify\Tests\Asset;

use Slince\Shopify\Manager\Asset\Asset;
use Slince\Shopify\Tests\Base\ModelTestCase;

class AssetTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Asset::class;
    }

    public function testId()
    {
        $this->markTestSkipped();
    }
}