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

use Slince\Shopify\Model\Asset;
use Slince\Shopify\Service\Contracts\AssetManagerInterface;

class AssetManager extends AbstractManager implements AssetManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'assets';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Asset::class;
    }

    /**
     * {@inheritdoc}
     */
    public function findAll($themeId)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $data = $this->client->get($resource);

        return $this->createMany(reset($data));
    }

    /**
     * @param int $themeId
     *
     * @return string
     */
    protected function createPartialResourceUrlForList($themeId)
    {
        return "themes/{$themeId}/assets";
    }

    /**
     * {@inheritdoc}
     */
    public function find($themeId, $key)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $data = $this->client->get($resource, [
            'asset' => [
                'key' => $key,
            ],
        ]);

        return $this->fromArray(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function update($themeId, array $data)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $data = $this->client->put($resource, [$this->getResourceName() => $data]);

        return $this->fromArray(reset($data));
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function remove($themeId, $key)
    {
        $resource = $this->createPartialResourceUrlForList($themeId);
        $this->client->delete($resource, [
            'asset' => [
                'key' => $key,
            ],
        ]);
    }
}
