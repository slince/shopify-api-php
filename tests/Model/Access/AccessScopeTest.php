<?php

namespace Slince\Shopify\Tests\Model\Access;

use Slince\Shopify\Model\Access\AccessScope;
use Slince\Shopify\Tests\Model\ModelTestCase;

class AccessScopeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AccessScope::class;
    }
}