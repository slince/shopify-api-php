<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\RedirectManager;


class RedirectManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Redirect';
    }

    public function getServiceClass()
    {
        return RedirectManager::class;
    }
}