<?php

namespace Slince\Shopify\Tests\Redirect;

use Slince\Shopify\Manager\Redirect\Redirect;
use Slince\Shopify\Tests\Base\ModelTestCase;

class RedirectTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Redirect::class;
    }
}