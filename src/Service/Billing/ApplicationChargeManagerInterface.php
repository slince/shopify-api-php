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

namespace Slince\Shopify\Service\Billing;

use Slince\Shopify\Model\Billing\ApplicationCharge;

interface ApplicationChargeManagerInterface
{
    /**
     * Gets all application charges.
     *
     * @param array $query
     *
     * @return ApplicationCharge[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the application charge by its id.
     *
     * @param int $id
     *
     * @return ApplicationCharge
     */
    public function find($id);

    /**
     * Updates the application charge.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the application charge.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a application charge.
     *
     * @param array $data
     *
     * @return ApplicationCharge
     */
    public function create(array $data);
}
