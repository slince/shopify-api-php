<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Transaction\Transaction;
use Slince\Shopify\Tests\Base\ModelTestCase;

class TransactionTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Transaction::class;
    }
}