<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\NoteAttribute;
use Slince\Shopify\Tests\Model\ModelTestCase;

class NoteAttributeTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return NoteAttribute::class;
    }
}