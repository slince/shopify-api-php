<?php

namespace Slince\Shopify\Tests\Model;

use Slince\Shopify\Model\Asset;

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