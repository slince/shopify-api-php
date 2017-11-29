<?php

namespace Slince\Shopify\Tests\Order;

use Slince\Shopify\Manager\Transaction\TransactionManager;
use Slince\Shopify\Tests\Base\NestCurdableTestCase;

class TransactionManagerTest extends NestCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Transaction';
    }

    public function getServiceClass()
    {
        return TransactionManager::class;
    }
}