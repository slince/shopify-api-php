<?php

namespace Slince\Shopify\Tests\Model\MarketingEvent;

use Slince\Shopify\Model\MarketingEvent\MarketingEvent;
use Slince\Shopify\Tests\Model\ModelTestCase;

class MarketingEventTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return MarketingEvent::class;
    }
}