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

namespace Slince\Shopify\Service\Billing;

use Slince\Shopify\Model\Billing\ApplicationCharge;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class ApplicationChargeManager extends GeneralCurdManager implements ApplicationChargeManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return ApplicationCharge::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'application_charge';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'application_charges';
    }
}
