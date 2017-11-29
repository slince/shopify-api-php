<?php

namespace Slince\Shopify\Tests\Hydrator;

use PHPUnit\Framework\TestCase;
use Slince\Shopify\Hydrator\Type\DateTimeType;
use Slince\Shopify\Hydrator\TypeCollection;

class TypeCollectionTest extends TestCase
{
    public function testArrayAccess()
    {
        $types = new TypeCollection([
            new DateTimeType('createdAt'),
            new DateTimeType('updatedAt'),
        ]);
        $this->assertCount(2, $types);
        $this->assertCount(2, $types->getTypes());
    }
}