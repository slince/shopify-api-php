<?php

namespace Slince\Shopify\Tests\Model\Store;

use Slince\Shopify\Model\Store\Policy;
use Slince\Shopify\Tests\Model\ModelTestCase;

class PolicyTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Policy::class;
    }
}