<?php

namespace Slince\Shopify\Tests;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Slince\Shopify\Client;
use Slince\Shopify\PublicAppCredential;
use Symfony\Component\Filesystem\Filesystem;

class TestCase extends BaseTestCase
{
    const FIXTURES_DIR = __DIR__.'/Fixtures';

    const ACCESS_TOKEN = 'asdasdadasdadasda';

    const SHOP_NAME = 'asasa.myshopify.com';

    /**
     * @var Filesystem
     */
    protected $filesystem;

    public function setUp(): void
    {
        $this->filesystem = new Filesystem();
        $this->filesystem->remove(__DIR__ . '/tmp');
    }

    public function tearDown(): void
    {
        $this->filesystem->remove(__DIR__ . '/tmp');
    }

    /**
     * @param string $fixture
     * @param int    $code
     * @param array  $headers
     *
     * @return Client
     */
    protected function getClientMock($fixture, $code = 200, $headers = [])
    {
        $fixture = static::FIXTURES_DIR.'/'.$fixture;
        $mock = $this->getMockBuilder(Client::class)
            ->setConstructorArgs([
                new PublicAppCredential(static::ACCESS_TOKEN),
                static::SHOP_NAME,
                [
                    'metaCacheDir' => __DIR__ . '/tmp'
                ]
            ])
            ->setMethods(['sendRequest'])
            ->getMock();

        $mock->method('sendRequest')
            ->willReturn(new Response($code, $headers, new Stream(fopen($fixture, 'r'))));

        return $mock;
    }

    protected function readFixture($fixture)
    {
        $fixture = static::FIXTURES_DIR.'/'.$fixture;
        return \GuzzleHttp\json_decode(file_get_contents($fixture), true);
    }
}