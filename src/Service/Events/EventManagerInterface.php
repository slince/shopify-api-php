<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Events;

use Slince\Shopify\Model\Events\Event;

interface EventManagerInterface
{
    /**
     * Gets all events.
     *
     * @param array $query
     *
     * @return Event[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the event by its id.
     *
     * @param int $id
     *
     * @return Event
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
     * Updates the event.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the event.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a event.
     *
     * @param array $data
     *
     * @return Event
     */
    public function create(array $data);
}
