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

namespace Slince\Shopify\Service\Customers;

use Slince\Shopify\Model\Customers\Customer;
use Slince\Shopify\Model\Customers\CustomerInvite;
use Slince\Shopify\Model\Orders\Order;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class CustomerManager extends GeneralCurdManager implements CustomerManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Customer::class;
    }

    /**
     * {@inheritdoc}
     */
    public function createAccountActivationUrl($id)
    {
        $data = $this->client->post("customers/{$id}/account_activation_url", []);

        return $data['account_activation_url'];
    }

    /**
     * {@inheritdoc}
     */
    public function sendInvite($id, array $data)
    {
        $data = $this->client->post("customers/{$id}/send_invite", [
            'customer_invite' => $data,
        ]);

        return $this->client->getHydrator()->hydrate($data, CustomerInvite::class);
    }

    /**
     * {@inheritdoc}
     */
    public function search(array $query = [])
    {
        $data = $this->client->get('customers/search', $query);

        return $this->createMany($data['customers']);
    }

    /**
     * {@inheritdoc}
     */
    public function orders($id)
    {
        $data = $this->client->get("customers/{$id}/orders");

        return $this->client->getHydrator()->hydrateMany($data['orders'], Order::class);
    }
}
