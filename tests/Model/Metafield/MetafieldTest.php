<?php

namespace Slince\Shopify\Tests\Model\Metafield;

use Slince\Shopify\Model\Metafield\Metafield;
use Slince\Shopify\Tests\Model\ModelTestCase;

class MetafieldTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Metafield::class;
    }
}