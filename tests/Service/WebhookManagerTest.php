<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\WebhookManager;


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