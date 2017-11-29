<?php
/**
 * Shopify library.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace Slince\Shopify\Common\Model;

use Slince\Shopify\Hydrator\Hydrator;
use Slince\Shopify\Hydrator\Type\DateTimeType;

abstract class Model implements ModelInterface
{
    /**
     * The id of the model.
     *
     * @var string
     */
    protected $id;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return Hydrator::instance()->extract($this);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $data)
    {
        return Hydrator::instance()->hydrate(
            new static(),
            $data
        );
    }

    /**
     * {@inheritdoc}
     */
    public static function createMany(array $data)
    {
        $models = [];
        foreach ($data as $item) {
            $models[] = static::fromArray($item);
        }

        return $models;
    }

    /**
     * {@inheritdoc}
     */
    public static function getTypeCollection()
    {
        return [
            new DateTimeType('createdAt'),
            new DateTimeType('updatedAt'),
            new DateTimeType('publishedAt'),
        ];
    }
}