<?php

namespace Slince\Shopify\Tests\Service\Store;

use GuzzleHttp\Utils;
use Slince\Shopify\Tests\Service\Common\NestCurdManagerTestCase;

class ProvinceManagerTest extends NestCurdManagerTestCase
{
    public function testRemove()
    {
        $this->markTestSkipped('Yet not support.');
    }

    public function testCreate()
    {
        $fixture = $this->getFixturesDir().'/'.'view.json';
        $service = $this->getService($fixture);
        $json = Utils::jsonDecode(file_get_contents(static::FIXTURES_DIR.'/'.$fixture), true);
        $json = reset($json);
        $article = $service->create(1, $json);
        var_dump(get_class($article));
        $this->assertInstanceOf($service->getModelClass(), $article);
    }
}