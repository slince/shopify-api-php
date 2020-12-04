<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Hydrator;

use DateTimeInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Hydrator implements HydratorInterface
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct(string $metaCacheDir)
    {
        $this->serializer = new Serializer($this->createNormalizers());
    }

    protected function createNormalizers()
    {
        $normalizer = new ObjectNormalizer(
            null,
            new CamelCaseToSnakeCaseNameConverter(),
            PropertyAccess::createPropertyAccessor(),
            new ReflectionExtractor(),
            null,
            null,
            [ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
        );

        return [
            new DateTimeNormalizer([DateTimeNormalizer::FORMAT_KEY => DateTimeInterface::ISO8601]),
            new ArrayDenormalizer(),
            $normalizer,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function extract($object): array
    {
        return $this->serializer->normalize($object);
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data, string $type): object
    {
        return $this->serializer->denormalize($data, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function hydrateMany(array $data, string $type): array
    {
        $objects = [];
        foreach ($data as $item) {
            $objects[] = $this->hydrate($item, $type);
        }
        return $objects;
    }
}
