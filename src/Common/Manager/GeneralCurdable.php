<?php
/**
 * Shopify library.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace Slince\Shopify\Common\Manager;

use Doctrine\Common\Inflector\Inflector;
use Slince\Shopify\Common\Model\ModelInterface;

abstract class GeneralCurdable extends AbstractManager
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
     * Finds the resources by given query condition.
     *
     * @param array $query
     *
     * @return ModelInterface[]
     */
    public function findAll(array $query = [])
    {
        $data = $this->client->get(Inflector::pluralize($this->getResourceName()), $query);

        return call_user_func([$this->getModelClass(), 'createMany'], reset($data));
    }

    /**
     * Finds the resource by given id.
     *
     * @param int $id
     *
     * @return ModelInterface
     */
    public function find($id)
    {
        $data = $this->client->get(Inflector::pluralize($this->getResourceName()).'/'.$id);

        return call_user_func([$this->getModelClass(), 'fromArray'], $data[$this->getResourceName()]);
    }

    /**
     * Delete a resource.
     *
     * @param int $id
     */
    public function remove($id)
    {
        $this->client->delete(Inflector::pluralize($this->getResourceName()).'/'.$id);
    }

    /**
     * Updates a resource.
     *
     * @param int   $id
     * @param array $data
     *
     * @return ModelInterface
     */
    public function update($id, array $data)
    {
        $data = $this->client->put(Inflector::pluralize($this->getResourceName()).'/'.$id, [$this->getResourceName() => $data]);
        $modelClass = $this->getModelClass();

        return call_user_func([$modelClass, 'fromArray'], $data[$this->getResourceName()]);
    }

    /**
     * Creates a resource.
     *
     * @param array $data
     *
     * @return ModelInterface
     */
    public function create(array $data)
    {
        $data = $this->client->post(Inflector::pluralize($this->getResourceName()), [$this->getResourceName() => $data]);

        return call_user_func([$this->getModelClass(), 'fromArray'], $data[$this->getResourceName()]);
    }

    /**
     * Gets the number of resource with given query.
     *
     * @param array $query
     *
     * @return int
     */
    public function count(array $query = [])
    {
        $partial = Inflector::pluralize($this->getResourceName()).'/count';

        return $this->client->get($partial, $query)['count'];
    }
}