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

namespace Slince\Shopify\Service\Report;

use Slince\Shopify\Resource\Analytics\Report;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class ReportManager extends GeneralCurdManager implements ReportManagerInterface
{
    /**
     * @inheritDoc
     */
    protected function getModelClass()
    {
        return Report::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'report';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'reports';
    }
}