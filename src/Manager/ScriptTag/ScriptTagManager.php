<?php

namespace Slince\Shopify\Manager\ScriptTag;

use Slince\Shopify\Common\Manager\GeneralCurdable;

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