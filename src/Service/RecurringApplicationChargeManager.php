<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\RecurringApplicationCharge;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class RecurringApplicationChargeManager extends GeneralCurdable implements RecurringApplicationChargeManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'recurring_application_charges';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'recurring_application_charge';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return RecurringApplicationCharge::class;
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function cancel($id)
    {
        parent::remove($id);
    }

    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {
        $data = $this->client->post('recurring_application_charges/'.$id.'/activate', []);

        return $this->fromArray(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function customize($id, $cappedAmount)
    {
        $data = $this->client->post('recurring_application_charges/'.$id.'/customize', [], [
            $this->getResourceName() => [
                'capped_amount' => $cappedAmount
            ]
        ]);

        return $this->fromArray(reset($data));
    }
}