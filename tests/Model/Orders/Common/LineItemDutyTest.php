<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\LineItemDuty;
use Slince\Shopify\Tests\Model\ModelTestCase;

class LineItemDutyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return LineItemDuty::class;
    }
}