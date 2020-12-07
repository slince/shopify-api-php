<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\TaxLine;
use Slince\Shopify\Tests\Model\ModelTestCase;

class TaxLineTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return TaxLine::class;
    }
}