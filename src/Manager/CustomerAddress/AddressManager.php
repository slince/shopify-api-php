<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\CustomerAddress;

use Slince\Shopify\Common\Manager\NestCrudable;

class AddressManager extends NestCrudable implements AddressManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'customer_addresses';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Address::class;
    }

    /**
     * {@inheritdoc}
     */
    public function bulkSet($customerId, array $ids, $operation)
    {
        $resource = 'customers/'.$customerId.'/addresses/set';
        $query = [
            'address_ids' => $ids,
            'operation' => $operation,
        ];
        $this->client->put($resource, [], $query);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefault($customerId, $id)
    {
        $data = $this->client->put('customers/'.$customerId.'/addresses/'.$id.'/default', []);

        return $this->fromArray($data['customer_address']);
    }

    /**
     * {@inheritdoc}
     */
    public function count($customerId, array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}