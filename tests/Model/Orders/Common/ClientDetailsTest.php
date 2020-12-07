<?php

namespace Slince\Shopify\Tests\Model\Orders\Common;

use Slince\Shopify\Model\Orders\Common\ClientDetails;
use Slince\Shopify\Tests\Model\ModelTestCase;

class ClientDetailsTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ClientDetails::class;
    }
}