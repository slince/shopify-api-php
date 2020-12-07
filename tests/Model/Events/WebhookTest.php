<?php

namespace Slince\Shopify\Tests\Model\Events;

use Slince\Shopify\Model\Events\Webhook;
use Slince\Shopify\Tests\Model\ModelTestCase;

class WebhookTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Webhook::class;
    }
}