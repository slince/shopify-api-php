<?php

namespace Slince\Shopify\Tests\Model\OnlineStore;

use Slince\Shopify\Model\OnlineStore\ScriptTag;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ScriptTagTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ScriptTag::class;
    }
}