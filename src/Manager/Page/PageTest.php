<?php

namespace Slince\Shopify\Tests\Page;

use Slince\Shopify\Manager\Page\Page;
use Slince\Shopify\Tests\Base\ModelTestCase;

class PageTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Page::class;
    }
}