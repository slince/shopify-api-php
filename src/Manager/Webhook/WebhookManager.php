<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Webhook;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class WebhookManager extends GeneralCurdable implements WebhookManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'webhooks';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Webhook::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'webhook';
    }

    /**
     * {@inheritdoc}
     */
    public function checkIncomingWebhookIsValid($request)
    {
        throw new \Exception('The method is not supported');
    }
}