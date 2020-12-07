<?php

namespace Slince\Shopify\Tests\Model\OnlineStore;

use Slince\Shopify\Model\OnlineStore\Redirect;
use Slince\Shopify\Tests\Model\ModelTestCase;

class RedirectTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Redirect::class;
    }
}