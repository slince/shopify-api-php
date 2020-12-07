<?php

namespace Slince\Shopify\Tests\Model\OnlineStore;

use Slince\Shopify\Model\OnlineStore\Theme;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ThemeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Theme::class;
    }
}