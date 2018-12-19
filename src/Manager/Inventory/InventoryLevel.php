<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Inventory;

use Slince\Shopify\Common\Model\Model;
use Slince\Shopify\Common\Model\AdminGraphqlApiId;

class InventoryLevel extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var int
     */
    protected $inventoryItemId;

    /**
     * @var int
     */
    protected $locationId;

    /**
     * @var int
     */
    protected $available;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;
}