<?php

namespace Slince\Shopify\Tests\Hydrator;

use Carbon\Carbon;
use Slince\Shopify\Hydrator\Hydrator;
use Slince\Shopify\Hydrator\HydratorInterface;
use Slince\Shopify\Tests\TestCase;

include __DIR__.'/test_classes.php';

class HydratorTest  extends TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf(HydratorInterface::class, Hydrator::instance());
    }

    public function testHydrate()
    {
        $post = Hydrator::instance()->hydrate(\Post::class, [
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
            'createdAt' => '2010-07-12T15:31:50-04:00',
        ]);

        $this->assertInstanceOf(\Post::class, $post);
        $this->assertInstanceOf(Carbon::class, $post->getCreatedAt());
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
        $post = Hydrator::instance()->hydrate(\Post::class, [
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
            'created_at' => '2010-07-12T15:31:50-04:00',
        ]);
        $data = Hydrator::instance()->extract($post);
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
            'category' => null,
            'created_at' => '2010-07-12T15:31:50-04:00',
        ], $data);
    }
}