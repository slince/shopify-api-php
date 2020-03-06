<?php

namespace Slince\Shopify\Tests\ScriptTag;

use Slince\Shopify\Manager\ScriptTag\ScriptTag;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ScriptTagTest extends ModelTestCase
{
    public function getModelClass()
    {
        return ScriptTag::class;
    }
}