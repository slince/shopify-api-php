<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service;

use Slince\Shopify\Model\ScriptTag;
use Slince\Shopify\Service\Contracts\ScriptTagManagerInterface;

class ScriptTagManager extends GeneralCurdable implements ScriptTagManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'script_tags';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return ScriptTag::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'script_tag';
    }
}
