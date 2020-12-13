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

use JMS\Serializer\Handler\ArrayCollectionHandler;
use JMS\Serializer\Handler\DateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Handler\IteratorHandler;
use JMS\Serializer\Handler\StdClassHandler;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class Hydrator implements HydratorInterface
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct($cacheDir, $metaDirs = [])
    {
        $builder = SerializerBuilder::create()
            ->setDocBlockTypeResolver(true)
            ->configureHandlers(function(HandlerRegistryInterface $handlerRegistry){
                $handlerRegistry->registerSubscribingHandler(new DateHandler(\DateTime::ISO8601));
                $handlerRegistry->registerSubscribingHandler(new StdClassHandler());
                $handlerRegistry->registerSubscribingHandler(new ArrayCollectionHandler());
                $handlerRegistry->registerSubscribingHandler(new IteratorHandler());
            })
            ->setCacheDir($cacheDir);
        $metaDirs && $builder->setMetadataDirs($metaDirs);
        $this->serializer = $builder->build();
    }

    /**
     * {@inheritdoc}
     */
    public function extract($object): array
    {
        return $this->serializer->toArray($object, $this->createDefaultContext());
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data, string $type): object
    {
        return $this->serializer->fromArray($data, $type);
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

    /**
     * Creates a default serializer context
     *
     * @return SerializationContext
     */
    protected function createDefaultContext()
    {
        return SerializationContext::create()->setSerializeNull(true);
    }
}