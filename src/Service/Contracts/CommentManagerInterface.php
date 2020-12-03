<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Comment;

interface CommentManagerInterface
{
    /**
     * Gets all comments.
     *
     * @param array $query
     *
     * @return Comment[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the comment by its id.
     *
     * @param int $id
     *
     * @return Comment
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
     * Updates the comment.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the comment.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);
}