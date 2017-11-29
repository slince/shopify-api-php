<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Taosikai <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ProductImage;

interface ImageManagerInterface
{
    /**
     * Finds articles.
     *
     * @param int   $blogId
     * @param array $query
     *
     * @return Image[]
     */
    public function findAll($blogId, array $query = []);

    /**
     * Finds an article.
     *
     * @param int $blogId
     * @param int $id
     *
     * @return Image
     */
    public function find($blogId, $id);

    /**
     * Gets the count.
     *
     * @param int   $blogId
     * @param array $query
     *
     * @return int
     */
    public function count($blogId, array $query = []);

    /**
     * Updates the article.
     *
     * @param int   $blogId
     * @param int   $id
     * @param array $data
     *
     * @return Image
     */
    public function update($blogId, $id, array $data);

    /**
     * Removes the article by given blog id and.
     *
     * @param int $blogId
     * @param int $id
     */
    public function remove($blogId, $id);

    /**
     * Creates a article.
     *
     * @param int   $blogId
     * @param array $data
     *
     * @return Image
     */
    public function create($blogId, array $data);
}