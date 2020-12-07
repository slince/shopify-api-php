<?php

namespace Slince\Shopify\Tests\Model\Products;

use Slince\Shopify\Model\Products\Option;
use Slince\Shopify\Tests\Model\ModelTestCase;

class OptionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Option::class;
    }
}