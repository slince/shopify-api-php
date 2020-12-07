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

namespace Slince\Shopify\Service\Analytics;

use Slince\Shopify\Model\Analytics\Report;

interface ReportManagerInterface
{
    /**
     * Gets all reports.
     *
     * @param array $query
     *
     * @return Report[]
     */
    public function findAll(array $query = []);

    /**
     * Gets the report by its id.
     *
     * @param int $id
     *
     * @return Report
     */
    public function find($id);

    /**
     * Updates the report.
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update($id, array $data);

    /**
     * Removes the report.
     *
     * @param int $id
     *
     * @return bool
     */
    public function remove($id);

    /**
     * Creates a report.
     *
     * @param array $data
     *
     * @return Report
     */
    public function create(array $data);
}
