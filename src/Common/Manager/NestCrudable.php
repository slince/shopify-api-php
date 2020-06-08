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

use Slince\Shopify\Inflector;
use Slince\Shopify\Common\CursorBasedPagination;
use Slince\Shopify\Common\Model\ModelInterface;

abstract class NestCrudable extends AbstractManager
{
    /**
     * Gets the parent resource name.
     *
     * @return string
     */
    abstract public function getParentResourceName();

    /**
     * Finds the resources by given query condition.
     *
     * @param int   $parentId
     * @param array $query
     *
     * @return ModelInterface[]
     */
    public function findAll($parentId, array $query = [])
    {
        $resource = $this->createPartialResourceUrlForList($parentId);
        $data = $this->client->get($resource, $query);

        return $this->createMany(reset($data));
    }

    /**
     * Create a paging query.
     *
     * @param int   $parentId
     * @param array $query
     *
     * @return CursorBasedPagination
     * @codeCoverageIgnore
     */
    public function paginate($parentId, array $query = [])
    {
        $resource = $this->createPartialResourceUrlForList($parentId);

        return new CursorBasedPagination($this, $resource, $query);
    }

    /**
     * Finds the resource by given id.
     *
     * @param int $parentId
     * @param int $id
     *
     * @return ModelInterface
     */
    public function find($parentId, $id)
    {
        $resource = $this->createPartialResourceUrlForView($parentId, $id);
        $data = $this->client->get($resource);

        return $this->fromArray(reset($data));
    }

    /**
     * Delete a resource.
     *
     * @param int $parentId
     * @param int $id
     */
    public function remove($parentId, $id)
    {
        $resource = $this->createPartialResourceUrlForView($parentId, $id);
        $this->client->delete($resource);
    }

    /**
     * Updates a resource.
     *
     * @param int   $parentId
     * @param int   $id
     * @param array $data
     *
     * @return ModelInterface
     */
    public function update($parentId, $id, array $data)
    {
        $resource = $this->createPartialResourceUrlForView($parentId, $id);
        $data = $this->client->put($resource, [$this->getResourceName() => $data]);

        return $this->fromArray(reset($data));
    }

    /**
     * Creates a resource.
     *
     * @param int   $parentId
     * @param array $data
     *
     * @return ModelInterface
     */
    public function create($parentId, array $data)
    {
        $resource = $this->createPartialResourceUrlForList($parentId);
        $data = $this->client->post($resource, [$this->getResourceName() => $data]);

        return $this->fromArray(reset($data));
    }

    /**
     * Gets the number of resource with given query.
     *
     * @param int   $parentId
     * @param array $query
     *
     * @return int
     */
    public function count($parentId, array $query = [])
    {
        $resource = $this->createPartialResourceUrlForList($parentId).'/count';

        return $this->client->get($resource, $query)['count'];
    }

    protected function createPartialResourceUrlForList($parentId)
    {
        return Inflector::pluralize($this->getParentResourceName())
            .'/'.$parentId
            .'/'.Inflector::pluralize($this->getResourceName());
    }

    protected function createPartialResourceUrlForView($parentId, $id)
    {
        return  $this->createPartialResourceUrlForList($parentId)
            .'/'.$id;
    }
}