<?php

namespace Slince\Shopify\Tests\Service;

use Slince\Shopify\Model\Shop;
use Slince\Shopify\Service\ShopManager;
use Slince\Shopify\Tests\TestCase;

class ShopManagerTest extends TestCase
{
    public function testGetShop()
    {
        $client = $this->getClientMock('Shop/shop.json');
        $shopManager = new ShopManager($client);

        $shop = $shopManager->get();

        $this->assertInstanceOf(Shop::class, $shop);
    }
}