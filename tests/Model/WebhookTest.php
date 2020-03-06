<?php

namespace Slince\Shopify\Tests\Model;

use Slince\Shopify\Model\Webhook;


class WebhookTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Webhook::class;
    }
}