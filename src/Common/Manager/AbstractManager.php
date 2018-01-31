<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Common\Manager;

use Slince\Shopify\Client;
use Slince\Shopify\Common\Model\ModelInterface;

abstract class AbstractManager implements ManagerInterface
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the model class.
     *
     * @return string
     */
    abstract public function getModelClass();

    /**
     * Gets the resource name.
     *
     * @return string
     */
    abstract public function getResourceName();

    /**
     * Create the model from an array.
     *
     * @param array  $data
     * @param string $modelClass
     *
     * @return ModelInterface
     */
    public function fromArray(array $data, $modelClass = null)
    {
        if (null === $modelClass) {
            $modelClass = $this->getModelClass();
        }

        return $this->client->getHydrator()->hydrate($modelClass, $data);
    }

    /**
     * Create many models from an array.
     *
     * @param array $data
     *
     * @return ModelInterface[]
     */
    public function createMany(array $data)
    {
        $models = [];
        foreach ($data as $item) {
            $models[] = $this->fromArray($item);
        }

        return $models;
    }

    /**
     * Converts the model to array.
     *
     * @param ModelInterface $model
     *
     * @return array
     */
    public function toArray($model)
    {
        return $this->client->getHydrator()->extract($model);
    }
}