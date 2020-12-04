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

namespace Slince\Shopify\Service\Events;

use Psr\Http\Message\RequestInterface;
use Slince\Shopify\Model\Events\Webhook;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class WebhookManager extends GeneralCurdManager implements WebhookManagerInterface
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
    public function checkIncomingWebhookIsValid(RequestInterface $request)
    {
        throw new \Exception('The method is not supported');
    }
}
