<?php

namespace Slince\Shopify\Tests;

use Slince\Shopify\Inflector;

class InflectorTest extends \PHPUnit\Framework\TestCase
{
    public function testPluralize()
    {
        $this->assertEquals('countries', Inflector::pluralize('country'));
    }

    public function testSingularize()
    {
        $this->assertEquals('country', Inflector::singularize('countries'));
    }

    public function testTableize()
    {
        $this->assertEquals('hello_world', Inflector::tableize('helloWorld'));
    }
}