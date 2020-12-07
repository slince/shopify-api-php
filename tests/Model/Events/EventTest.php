<?php

namespace Slince\Shopify\Tests\Model\Events;

use Slince\Shopify\Model\Events\Event;
use Slince\Shopify\Tests\Model\ModelTestCase;

class EventTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Event::class;
    }
}