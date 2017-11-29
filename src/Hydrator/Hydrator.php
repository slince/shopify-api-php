<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Taosikai <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Hydrator;

use Slince\Shopify\Hydrator\Association\AssociationInterface;
use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Hydrator implements HydratorInterface
{
    /**
     * @var ObjectNormalizer
     */
    protected $normalizer;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var PropertyAccessor
     */
    protected $propertyAccessor;

    /**
     * @var static
     */
    protected static $hydrator;

    /**
     * Gets the Hydrator.
     *
     * @return Hydrator
     */
    public static function instance()
    {
        if (!is_null(static::$hydrator)) {
            return static::$hydrator;
        }

        return static::$hydrator = new static();
    }

    public function __construct(PropertyAccessor $propertyAccessor = null, ObjectNormalizer $normalizer = null)
    {
        $this->propertyAccessor = $propertyAccessor ?: PropertyAccess::createPropertyAccessor();
        $this->normalizer = $normalizer ?: new ObjectNormalizer(
            null,
            new CamelCaseToSnakeCaseNameConverter(),
            $this->propertyAccessor
        );
        $this->serializer = $this->getSerializer();
    }

    protected function getSerializer()
    {
         return new Serializer([$this->normalizer]);
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate($target, array $data, $types = [])
    {
        $class = is_object($target) ? get_class($target) : $target;
        $object = $this->serializer->denormalize($data, $class);
        if ($object instanceof HydratableInterface) {
            $types = array_merge($types, $object::getTypeCollection());
        }
        $types && $this->applyTypesForHydrate($object, $types);

        return $object;
    }

    /**
     * {@inheritdoc}
     */
    public function extract($object)
    {
        if ($object instanceof HydratableInterface) {
            $types = $object::getTypeCollection();
            $this->normalizer->setCallbacks($this->createCallbacksForExtract($types));
        }

        return $this->serializer->normalize($object);
    }

    protected function createCallbacksForExtract(array $types)
    {
        $callbacks = [];
        foreach ($types as $type) {
            if ($type instanceof AssociationInterface) {
                $type->setHydrator($this);
            }
            $callbacks[$type->getName()] = function($value) use ($type){
                return is_null($value) ? null : $type->deformat($value);
            };
        }

        return $callbacks;
    }

    protected function applyTypesForHydrate($object, $types)
    {
        foreach ($types as $type) {
            if ($type instanceof AssociationInterface) {
                $type->setHydrator($this);
            }
            try {
                if ($value = $this->propertyAccessor->getValue($object, $type->getName())) {
                    $this->propertyAccessor->setValue($object, $type->getName(), $type->format($value));
                }
            } catch (NoSuchPropertyException $exception) {
                //Ignore if the property is not exists
            }
        }
    }
}