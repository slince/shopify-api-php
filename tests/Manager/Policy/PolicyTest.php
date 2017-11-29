<?php

namespace Slince\Shopify\Tests\Policy;

use Slince\Shopify\Manager\Policy\Policy;
use Slince\Shopify\Tests\Base\ModelTestCase;

class PolicyTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Policy::class;
    }
}