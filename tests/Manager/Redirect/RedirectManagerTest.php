<?php

namespace Slince\Shopify\Tests\Redirect;

use Slince\Shopify\Manager\Redirect\RedirectManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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