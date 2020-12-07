<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\Duty;
use Slince\Shopify\Tests\Model\ModelTestCase;

class DutyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Duty::class;
    }
}