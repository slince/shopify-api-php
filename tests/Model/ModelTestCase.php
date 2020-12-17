<?php

namespace Slince\Shopify\Tests\Model;

use Slince\Shopify\Tests\TestCase;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Doctrine\Common\Annotations\AnnotationReader;
use JMS\Serializer\Builder\DefaultDriverFactory;
use JMS\Serializer\Metadata\Driver\DocBlockDriverFactory;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Type\Parser;
use JMS\Serializer\Metadata\ClassMetadata;
use Metadata\MetadataFactory;

abstract class ModelTestCase extends TestCase
{
    /**
     * @var PropertyAccessor
     */
    protected $accessor;

    protected static $metadataFactory;

    public function setUp(): void
    {
        $this->accessor = PropertyAccess::createPropertyAccessor();
        parent::setUp();
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

    public function testProperty()
    {
        $modelClass = $this->getModelClass();
        $model = new $modelClass;
        $metadata = $this->getClassMetadata()->getMetadataForClass($modelClass);
        foreach ($metadata->propertyMetadata as $attr => $propertyMetadata) {
            $value = $this->generateValue($propertyMetadata->type['name'], $propertyMetadata->type['params']);
            $this->accessor->setValue($model, $attr, $value);
            $this->assertEquals($value, $this->accessor->getValue($model, $attr));
        }
    }

    protected function generateValue($type, $params = [])
    {
        switch ($type) {
            case 'bool':
                $value = true;
                break;
            case 'string':
                $value = "foo";
                break;
            case 'int':
                $value = 998;
                break;
            case 'float':
                $value = 998.98;
                break;
            case 'DateTime':
            case 'DateTimeInterface':
                $value = new \DateTime();
                break;
            case 'array':
                if (!empty($params[0])) {
                    if (is_scalar($params[0])) {
                        $sub = $this->generateValue($params[0]);
                    } else {
                        $sub = $this->generateValue($params[0]['name']);
                    }
                    $value = [$sub];
                } else {
                    $value = [1,2,3];
                }
                break;
            default:
                $value = new $type();
        }
        return $value;
    }

    protected function getClassMetadata()
    {
        if (null !== static::$metadataFactory) {
            return static::$metadataFactory;
        }
        $propertyNamingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());
        $typeParser = new Parser();
        $driverFactory = new DefaultDriverFactory(
            $propertyNamingStrategy,
            $typeParser
        );
        $driverFactory = new DocBlockDriverFactory($driverFactory, $typeParser);
        $annotationReader = new AnnotationReader();
        $metadataDriver = $driverFactory->createDriver([
            'Slince\\Shopify\\Model' => static::METADATA_DIR
        ], $annotationReader);
        $metadataFactory = new MetadataFactory($metadataDriver, null, true);
        return static::$metadataFactory = $metadataFactory;
    }
}