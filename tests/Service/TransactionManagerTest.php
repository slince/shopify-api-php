<?php

namespace Slince\Shopify\Tests\Transaction;

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

    public function testUpdate()
    {
        $this->markTestSkipped();
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }
}