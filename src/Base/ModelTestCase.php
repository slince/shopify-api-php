<?php

namespace Slince\Shopify\Tests\Base;

use PHPUnit\Framework\TestCase;
use Slince\Shopify\Common\Model\ModelInterface;
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

    protected function getModelMetadata()
    {
        $reflection = new \ReflectionClass($this->getModelClass());
        $properties = $reflection->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);
        $properties = array_map(function(\ReflectionProperty $property){
            return $property->getName();
        }, $properties);
        $methods = $reflection->getMethods(\ReflectionProperty::IS_PUBLIC);
        $setter = $getter = [];
        foreach ($methods as $method) {
            if (0 === strpos($method, 'set')) {
                $setter[] = $method;
            } elseif (0 === strpos($method, 'get')) {
                $getter[] = $method;
            }
        }

        return [$properties, $setter, $getter];
    }

    /**
     * @param boolean $fulfillment
     *
     * @return ModelInterface
     */
    protected function mockModel($fulfillment = true)
    {
        $model = $this->getMockBuilder($this->getModelClass())
            ->getMockForAbstractClass();

        if ($fulfillment) {
            list($properties, $setter, $getter) = $this->getModelMetadata();
            foreach ($properties as $property) {
                $this->accessor->setValue($model, $property, 'test'.$property);
            }
        }

        return $model;
    }

    public function testId()
    {
        $model = $this->mockModel(false);
        $this->assertNull($model->getId());
        $model->setId(10);
        $this->assertEquals(10, $model->getId());
    }

    public function testPropertyAccess()
    {
        $model = $this->mockModel();
        list($properties) = $this->getModelMetadata();
        foreach ($properties as $property) {
            $this->assertEquals('test'.$property, $this->accessor->getValue($model, $property));
        }
    }
}