<?php

namespace Slince\Shopify\Tests\Theme;

use Slince\Shopify\Manager\Theme\Theme;
use Slince\Shopify\Tests\Base\ModelTestCase;

class ThemeTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Theme::class;
    }
}