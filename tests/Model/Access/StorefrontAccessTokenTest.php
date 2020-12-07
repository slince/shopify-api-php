<?php

namespace Slince\Shopify\Tests\Model\Access;

use Slince\Shopify\Model\Access\StorefrontAccessToken;
use Slince\Shopify\Tests\Model\ModelTestCase;

class StorefrontAccessTokenTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return StorefrontAccessToken::class;
    }
}