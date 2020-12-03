<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\CustomerSavedSearch;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class CustomerSavedSearchManager extends GeneralCurdable implements CustomerSavedSearchManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'customer_saved_searches';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'customer_saved_search';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return CustomerSavedSearch::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomers($id)
    {
        $data = $this->client->get('customer_saved_searches/'.$id.'/customers');

        return $this->createMany($data['customers']);
    }
}