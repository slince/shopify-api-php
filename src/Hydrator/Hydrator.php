<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Hydrator;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class Hydrator implements HydratorInterface
{
    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var SerializationContext
     */
    protected $serializationContext;

    public function __construct($cacheDir, $metaDir)
    {
        $this->serializer = SerializerBuilder::create()
            ->setCacheDir($cacheDir)
            ->addMetadataDir($metaDir)
            ->build();
        $this->serializationContext = SerializationContext::create()->setSerializeNull(true);
    }

    /**
     * {@inheritdoc}
     */
    public function extract($object)
    {
        return $this->serializer->toArray($object, $this->serializationContext);
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate($target, array $data)
    {
        return $this->serializer->fromArray($data, $target);
    }
}