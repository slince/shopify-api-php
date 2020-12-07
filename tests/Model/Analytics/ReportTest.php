<?php

namespace Slince\Shopify\Tests\Model\Analytics;

use Slince\Shopify\Model\Analytics\Report;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ReportTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Report::class;
    }
}