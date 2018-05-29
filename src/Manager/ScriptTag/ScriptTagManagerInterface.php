<?php

namespace Slince\Shopify\Manager\ScriptTag;

use Psr\Http\Message\RequestInterface;

interface ScriptTagManagerInterface
{
    /**
     * Gets all script tags.
     *
     * @param array $query
     *
     * @return ScripTag[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the script tag by its id.
     *
     * @param int $id
     *
     * @return ScripTag
     */
    public function find($id);

    /**
     * Gets the count.
     *
     * @param array $query
     *
     * @return int
     */
    public function count(array $query = []);

    /**
     * Updates the script tag.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the script tag.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a script tag.
     *
     * @param array $data
     *
     * @return Webhook
     */
    public function create(array $data);
}