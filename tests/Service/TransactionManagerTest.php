<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Service\TransactionManager;


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