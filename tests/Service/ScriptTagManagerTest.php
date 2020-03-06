<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\ScriptTagManager;


class ScriptTagManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'ScriptTag';
    }

    public function getServiceClass()
    {
        return ScriptTagManager::class;
    }
}