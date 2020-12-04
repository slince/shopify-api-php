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

namespace Slince\Shopify\Service\Common;

interface ManagerInterface
{
    /**
     * Gets the service name.
     *
     * @return string
     */
    public static function getServiceName();

    /**
     * Create the model from an array.
     *
     * @param array  $data
     *
     * @return object
     */
    public function fromArray(array $data);

    /**
     * Create many models from an array.
     *
     * @param array $data
     *
     * @return object[]
     */
    public function createMany(array $data);

    /**
     * Converts the model to array.
     *
     * @param object $model
     *
     * @return array
     */
    public function toArray($model);
}
