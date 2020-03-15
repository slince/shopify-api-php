<?php


namespace Slince\Shopify\Hydrator;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class Hydrator2 implements HydratorInterface
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct($cacheDir, $metaDirs)
    {
        $this->serializer = SerializerBuilder::create()
            ->setCacheDir($cacheDir)
            ->setMetadataDirs($metaDirs)
            ->build();
    }

    /**
     * {@inheritdoc}
     */
    public function extract($object)
    {
        return $this->serializer->toArray($object, $this->createDefaultContext());
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate(string $target, array $data)
    {
        return $this->serializer->fromArray($data, $target);
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