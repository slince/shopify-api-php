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

namespace Slince\Shopify\Service\Common;

use Psr\Http\Message\ResponseInterface;
use Slince\Shopify\Client;
use Slince\Shopify\Exception\RuntimeException;

class CursorBasedPagination
{
    const LINK_REGEX = '/<(.*page_info=([a-z0-9\-_]+).*)>; rel="?{type}"?/i';

    /**
     * @var string
     */
    protected $resource;

    /**
     * @var array
     */
    protected $query;

    /**
     * @var ManagerInterface
     */
    protected $manager;

    /**
     * @var array
     */
    protected $links = [];

    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client, ManagerInterface $manager, $resource, $query = [])
    {
        $this->client = $client;
        $this->manager = $manager;
        $this->resource = $resource;
        $this->query = $query;
    }

    /**
     * Gets the current page data.
     *
     * @param string $pageInfo
     * @return object[]
     */
    public function current($pageInfo = null)
    {
        $query = $this->query;
        if (null !== $pageInfo) {
            $query = array_intersect_key($query, ['limit' => true, 'fields' => true]);
            $query['page_info'] = $pageInfo;
        }
        $data = $this->client->get($this->resource, $query);

        $this->links = $this->extractHeaderLink($this->client->getLastResponse());
        return $this->manager->createMany(reset($data));
    }

    protected function extractHeaderLink(ResponseInterface $response)
    {
        if (!$response->hasHeader('Link')) {
            return [];
        }
        $links = [
            'next' => null,
            'previous' => null,
        ];
        foreach (array_keys($links) as $type) {
            $matched = preg_match(
                str_replace('{type}', $type, static::LINK_REGEX),
                $response->getHeader('Link')[0],
                $matches
            );
            if ($matched) {
                $links[$type] = $matches[2];
            }
        }

        return $links;
    }

    /**
     * Get the next page of data.
     *
     * @return object[]
     */
    public function next()
    {
        if (!$this->hasNext()) {
            throw new RuntimeException("There's no next page");
        }

        return $this->current($this->links['next']);
    }

    /**
     * Checks whether has next page.
     *
     * @return bool
     */
    public function hasNext()
    {
        return !empty($this->links['next']);
    }

    /**
     * Gets the next page info.
     *
     * @return string|null
     */
    public function getNextPageInfo()
    {
        return isset($this->links['next']) ? $this->links['next'] : null;
    }

    /**
     * Get the previous page of data.
     *
     * @return object[]
     */
    public function prev()
    {
        if (!$this->hasPrev()) {
            throw new RuntimeException("There's no previous page");
        }

        return $this->current($this->links['previous']);
    }

    /**
     * Checks whether has previous page.
     *
     * @return bool
     */
    public function hasPrev()
    {
        return !empty($this->links['previous']);
    }

    /**
     * Gets the previous page info.
     *
     * @return string|null
     */
    public function getPrevPageInfo()
    {
        return isset($this->links['previous']) ? $this->links['previous'] : null;
    }
}
