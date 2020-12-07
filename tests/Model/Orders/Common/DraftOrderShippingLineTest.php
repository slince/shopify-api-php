<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\DraftOrderShippingLine;
use Slince\Shopify\Tests\Model\ModelTestCase;

class DraftOrderShippingLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return DraftOrderShippingLine::class;
    }
}