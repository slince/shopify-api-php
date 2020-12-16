<?php

namespace Slince\Shopify\Tests\Service\Common;

use Slince\Shopify\Tests\TestCase;

class AbstractManagerTestCase extends TestCase
{
    /**
     * @param string $fixture
     *
     * @return object
     */
    public function getService($fixture)
    {
        $class = $this->getServiceClass();
        return new $class($this->getClientMock($fixture));
    }

    protected function getServiceClass()
    {
        return str_ireplace(['\Tests', 'Test'], ['', ''], get_called_class());
    }

    protected function getFixturesDir()
    {
        $fixture = str_ireplace(['Slince\Shopify\Tests\Service', 'ManagerTest'], ['', ''], get_called_class());
        return str_replace('\\', '/', $fixture);
    }
}