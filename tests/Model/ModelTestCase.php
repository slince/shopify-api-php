<?php

namespace Slince\Shopify\Tests\Model;

use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;

abstract class ModelTestCase extends TestCase
{
    /**
     * @var PropertyAccessor
     */
    protected $accessor;

    public function setUp(): void
    {
        $this->accessor = PropertyAccess::createPropertyAccessor();
    }

    /**
     * @return string
     */
    abstract public function getModelClass();

    public function testId()
    {
        $modelClass = $this->getModelClass();
        if (!property_exists($modelClass, 'id')) {
            $this->markTestSkipped(sprintf('The model "%s" dont have id', $modelClass));
        }
        $model = $this->getMockBuilder($this->getModelClass())
            ->getMockForAbstractClass();
        $this->assertNull($model->getId());
        $model->setId(10);
        $this->assertEquals(10, $model->getId());
    }
}