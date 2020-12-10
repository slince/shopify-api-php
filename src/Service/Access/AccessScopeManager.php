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

namespace Slince\Shopify\Service\Access;

use Slince\Shopify\Model\Access\AccessScope;
use Slince\Shopify\Service\Common\AbstractManager;

class AccessScopeManager extends AbstractManager implements AccessScopeManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return AccessScope::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'access_scope';
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'access_scopes';
    }

    /**
     * @inheritDoc
     */
    public function findAll(array $query = [])
    {
        $data = $this->client->createRequest('GET',
            $this->client->buildUrl('oauth/access_scopes', false), [
            'query' => $query
        ]);
        return $this->createMany($data['access_scopes']);
    }
}
