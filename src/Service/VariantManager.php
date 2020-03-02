<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\ProductVariant;

use Slince\Shopify\Common\Manager\AbstractManager;

class VariantManager extends AbstractManager implements VariantManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'product_variants';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'variant';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Variant::class;
    }

    /**
     * {@inheritdoc}
     */
    public function findAll($productId, array $query = [])
    {
        $data = $this->client->get('products'.'/'.$productId.'/variants', $query);

        return $this->createMany($data['variants']);
    }

    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        $data = $this->client->get('/variants/'.$id);

        return $this->fromArray($data['variant']);
    }

    /**
     * {@inheritdoc}
     */
    public function count($productId, array $query = [])
    {
        $data = $this->client->get('products'.'/'.$productId.'/variants/count', $query);

        return $data['count'];
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        $data = $this->client->put('/variants/'.$id, [
            'variant' => $data,
        ]);

        return $this->fromArray($data['variant']);
    }

    /**
     * {@inheritdoc}
     */
    public function remove($productId, $id)
    {
        $this->client->delete('products'.'/'.$productId.'/variants/'.$id);
    }

    /**
     * {@inheritdoc}
     */
    public function create($productId, array $data)
    {
        $data = $this->client->post('products/'.$productId.'/variants', [
            'variant' => $data,
        ]);

        return $this->fromArray($data['variant']);
    }
}