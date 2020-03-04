<?php

namespace Slince\Shopify\Tests\RecurringApplicationCharge;

use Slince\Shopify\Manager\RecurringApplicationCharge\RecurringApplicationChargeManager;
use Slince\Shopify\Tests\Base\GeneralCurdableTestCase;

class RecurringApplicationChargeManagerTest extends GeneralCurdableTestCase
{
    public function getFixturesDir()
    {
        return 'RecurringApplicationCharge';
    }

    public function getServiceClass()
    {
        return RecurringApplicationChargeManager::class;
    }

    public function testCount()
    {
        $this->markTestSkipped();
    }

    public function testRemove()
    {
        $this->markTestSkipped();
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testCancel()
    {
        $fixture = $this->getFixturesDir().'/'.'delete.json';
        $service = $this->getService($fixture);
        $service->cancel(123);
    }

    public function testActivate()
    {
        $fixture = $this->getFixturesDir().'/activate.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $entity = $service->activate(12);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }

    public function testCustomize()
    {
        $fixture = $this->getFixturesDir().'/customize.json';
        $service = $this->getService($fixture);
        $json = $this->readFixture($fixture);
        $entity = $service->customize(12, 200);
        $this->assertInstanceOf($service->getModelClass(), $entity);
    }
}