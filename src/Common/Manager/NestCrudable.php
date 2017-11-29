<?php
/**
 * Created by PhpStorm.
 * User: taosikai
 * Date: 2017/11/28
 * Time: 11:18.
 */

namespace Slince\Shopify\Common\Manager;

use Doctrine\Common\Inflector\Inflector;
use Slince\Shopify\Common\Model\ModelInterface;

abstract class NestCrudable extends AbstractManager
{
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

        return call_user_func([$this->getModelClass(), 'createMany'], reset($data));
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

        return call_user_func([$this->getModelClass(), 'fromArray'], reset($data));
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

        return call_user_func([$this->getModelClass(), 'fromArray'], reset($data));
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

        return call_user_func([$this->getModelClass(), 'fromArray'], reset($data));
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