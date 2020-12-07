<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\LineItemProperty;
use Slince\Shopify\Tests\Model\ModelTestCase;

class LineItemPropertyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItemProperty::class;
    }
}