<?php

namespace Slince\Shopify\Tests\Model;


use Doctrine\Common\Inflector\Inflector;
use Slince\Shopify\Hydrator\Hydrator;
use Slince\Shopify\Tests\TestCase;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;

abstract class ModelTestCase extends TestCase
{
    /**
     * @var Hydrator
     */
    protected $hydrator;

    /**
     * @var PropertyInfoExtractor
     */
    protected $propertyInfo;

    /**
     * @var PropertyAccessor
     */
    protected $propertyAccessor;

    public function setUp(): void
    {
        parent::setUp();
        $this->hydrator = new Hydrator();
        $this->propertyInfo = new PropertyInfoExtractor([
            new ReflectionExtractor(),
            new PhpDocExtractor()
        ]);
        $this->propertyAccessor = PropertyAccess::createPropertyAccessor();
    }

    abstract protected function getModelClass();

    public function createModel()
    {
        $modelClass = $this->getModelClass();
        $fixtures = basename($modelClass);
        $data = $this->readFixture("{$fixtures}/view.json");
        $obj = $this->hydrator->hydrate($modelClass, reset($data));
        return [$obj, reset($data)];
    }

    public function testProperty()
    {
        list($obj, $data) = $this->createModel();
        $modelClass = $this->getModelClass();
        foreach ($this->propertyInfo->getProperties($modelClass) as $property) {
            $snake = Inflector::tableize($property);
            $value = $this->propertyAccessor->getValue($obj, $property);
            if (is_scalar($value) || is_null($value)) {
                $this->assertEquals($value, $data[$snake]);
            } else {
            }
        }
    }
}