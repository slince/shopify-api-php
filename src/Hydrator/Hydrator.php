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

use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Hydrator implements HydratorInterface
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct()
    {
        $normalizer = new ObjectNormalizer(null,
            new CamelCaseToSnakeCaseNameConverter(),
            PropertyAccess::createPropertyAccessor(),
            new ReflectionExtractor(), null, null,
            [ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
        );
        $this->serializer = new Serializer([
            new DateTimeNormalizer([DateTimeNormalizer::FORMAT_KEY => \DateTimeInterface::ISO8601]),
            $normalizer
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function extract($object)
    {
        return $this->serializer->normalize($object);
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate(string $target, array $data)
    {
        return $this->serializer->denormalize($data, $target, null);
    }
}