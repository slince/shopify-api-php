<?php

namespace Slince\Shopify\Tests\ScriptTag;

use Slince\Shopify\Manager\ScriptTag\ScriptTagManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

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