<?php
/**
 * Shopify library.
 *
 * @author Tao <taosikai@yeah.net>
 */

namespace Slince\Shopify\Common\Manager;

use Slince\Shopify\Client;

abstract class AbstractManager implements ManagerInterface
{
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}