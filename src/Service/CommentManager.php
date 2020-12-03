<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Comment;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class CommentManager extends GeneralCurdable implements CommentManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Comment::class;
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        throw new \Exception('The action is not supported');
    }
}