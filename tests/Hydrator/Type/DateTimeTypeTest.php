<?php

namespace Slince\Shopify\Tests\Hydrator\Type;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Slince\Shopify\Hydrator\Type\DateTimeType;

class DateTimeTypeTest extends TestCase
{
    public function testFormat()
    {
        $type = new DateTimeType('createdAt');
        $date = $type->format('2010-07-12T15:31:50-04:00');
        $this->assertInstanceOf(Carbon::class, $date);
        $this->assertEquals('2010-07-12T15:31:50-04:00', $type->deformat($date));
    }
}