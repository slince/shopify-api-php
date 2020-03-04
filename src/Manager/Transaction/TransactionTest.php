<?php

namespace Slince\Shopify\Tests\Transaction;

use Slince\Shopify\Manager\Transaction\Transaction;
use Slince\Shopify\Tests\Base\ModelTestCase;

class TransactionTest extends ModelTestCase
{
    public function getModelClass()
    {
        return Transaction::class;
    }
}