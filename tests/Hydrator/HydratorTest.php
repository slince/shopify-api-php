<?php

namespace Slince\Shopify\Tests\Hydrator;

use Carbon\Carbon;
use Slince\Shopify\Hydrator\Hydrator;
use Slince\Shopify\Hydrator\HydratorInterface;
use Slince\Shopify\Tests\TestCase;

include_once __DIR__.'/test_classes.php';

class HydratorTest  extends TestCase
{
    /**
     * @var Hydrator
     */
    protected $hydrator;

    public function setUp(): void
    {
        parent::setUp();
        $this->hydrator = new Hydrator(__DIR__ . '/../tmp', ['' => __DIR__ . '/serializer']);
    }

    public function testInstance()
    {
        $this->assertInstanceOf(HydratorInterface::class, $this->hydrator);
    }

    public function testHydrate()
    {
        $post = $this->hydrator->hydrate(\Post::class, [
            'title' => 'this is a post title',
            'body' => 'this is a post body',
            'category' => [
                'name' => 'test category',
            ],
            'comments' => [
                [
                    'body' => 'comment 1',
                ],
                [
                    'body' => 'comment 2',
                ],
            ],
            'created_at' => '2018-01-30T09:42:13+0000',
        ]);

        $this->assertInstanceOf(\Post::class, $post);
        $this->assertInstanceOf(\DateTime::class, $post->getCreatedAt());
        $this->assertEquals('this is a post title', $post->getTitle());
        $this->assertEquals('this is a post body', $post->getBody());
        $this->assertInstanceOf(\Category::class, $post->getCategory());
        $this->assertEquals('test category', $post->getCategory()->getName());
        $this->assertCount(2, $post->getComments());
        $this->assertInstanceOf(\Comment::class, $post->getComments()[0]);
        $this->assertEquals('comment 1', $post->getComments()[0]->getBody());
        $this->assertEquals('comment 2', $post->getComments()[1]->getBody());

        return $post;
    }

    public function testExtract()
    {
        $post = $this->hydrator->hydrate(\Post::class, [
            'title' => 'this is a post title',
            'body' => 'this is a post body',
            'comments' => [
                [
                    'body' => 'comment 1',
                ],
                [
                    'body' => 'comment 2',
                ],
            ],
            'created_at' => '2018-01-30T09:42:13+0000',
        ]);
        $data = $this->hydrator->extract($post);
        $this->assertEquals([
            'title' => 'this is a post title',
            'body' => 'this is a post body',
            'comments' => [
                [
                    'body' => 'comment 1',
                ],
                [
                    'body' => 'comment 2',
                ],
            ],
            'created_at' => '2018-01-30T09:42:13+0000',
            'category' => null
        ], $data);
    }

    public function testExtractMany()
    {
        $post = $this->hydrator->hydrate(\Post::class, [
            'title' => 'this is a post title',
            'body' => 'this is a post body',
            'comments' => [
                [
                    'body' => 'comment 1',
                ],
                [
                    'body' => 'comment 2',
                ],
            ],
            'created_at' => '2018-01-30T09:42:13+0000',
        ]);
        $data = $this->hydrator->extract($post);
        $data = $this->hydrator->extract($post);
        $this->assertEquals([
            'title' => 'this is a post title',
            'body' => 'this is a post body',
            'comments' => [
                [
                    'body' => 'comment 1',
                ],
                [
                    'body' => 'comment 2',
                ],
            ],
            'created_at' => '2018-01-30T09:42:13+0000',
            'category' => null
        ], $data);
    }
}