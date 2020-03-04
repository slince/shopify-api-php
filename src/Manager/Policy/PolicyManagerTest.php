<?php

namespace Slince\Shopify\Tests\Policy;

use Slince\Shopify\Manager\Policy\PolicyManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class PolicyManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'Policy';
    }

    public function getServiceClass()
    {
        return PolicyManager::class;
    }

    public function testFind()
    {
        $this->markTestSkipped();
    }

    public function testCreate()
    {
        $this->markTestSkipped();
    }

    public function testCount()
    {
        $this->markTestSkipped();
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