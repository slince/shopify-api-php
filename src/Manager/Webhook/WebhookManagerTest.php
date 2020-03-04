<?php

namespace Slince\Shopify\Tests\Webhook;

use Slince\Shopify\Manager\Webhook\WebhookManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class WebhookManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Webhook';
    }

    public function getServiceClass()
    {
        return WebhookManager::class;
    }
}