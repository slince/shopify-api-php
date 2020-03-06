<?php

namespace Slince\Shopify\Tests\Webhook;

use Slince\Shopify\Manager\Webhook\Webhook;
use Slince\Shopify\Tests\Base\ModelTestCase;

class WebhookTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Webhook::class;
    }
}