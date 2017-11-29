<?php
/**
 * Shopify library.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace Slince\Shopify\Common\Model;

use JsonSerializable;
use Slince\Shopify\Hydrator\HydratableInterface;

interface ModelInterface extends JsonSerializable, HydratableInterface
{
    /**
     * Gets the id of the model.
     *
     * @return int
     */
    public function getId();

    /**
     * Sets the id for the model.
     *
     * @param int $id
     *
     * @return ModelInterface
     */
    public function setId($id);

    /**
     * Converts the model to array.
     *
     * @return array
     */
    public function toArray();

    /**
     * Create the model from an array.
     *
     * @param array $data
     *
     * @return static
     */
    public static function fromArray(array $data);

    /**
     * Create many models from an array.
     *
     * @param array $data
     *
     * @return static[]
     */
    public static function createMany(array $data);
}