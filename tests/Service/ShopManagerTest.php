<?php

namespace Slince\Shopify\Tests\Manager\Shop;

use Slince\Shopify\Manager\Shop\Shop;
use Slince\Shopify\Manager\Shop\ShopManager;
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