<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Customer;

use Slince\Shopify\Common\Manager\GeneralCurdable;
use Slince\Shopify\Manager\Order\Order;

class CustomerManager extends GeneralCurdable implements CustomerManagerInterface
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
        $data = $this->client->post('customers/'.$id.'/account_activation_url', []);

        return $data['account_activation_url'];
    }

    /**
     * {@inheritdoc}
     */
    public function sendInvite($id, array $data)
    {
        $data = $this->client->post('customers/'.$id.'/send_invite', [
            'customer_invite' => $data,
        ]);

        return $this->fromArray($data, CustomerInvite::class);
    }

    /**
     * {@inheritdoc}
     */
    public function search(array $query = [])
    {
        $data = $this->client->get('customers/search', $query);

        return $this->createMany(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function orders($id)
    {
        $data = $this->client->get('customers/'.$id.'/orders');

        return $this->createMany(reset($data), Order::class);
    }
}
