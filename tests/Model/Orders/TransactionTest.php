<?php

namespace Slince\Shopify\Tests\Model\Orders;

use Slince\Shopify\Model\Orders\Transaction;
use Slince\Shopify\Tests\Model\ModelTestCase;

class TransactionTest extends ModelTestCase
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return Transaction::class;
    }
}