<?php


namespace Slince\Shopify\Service\Shipping;

use Slince\Shopify\Model\Shipping\FulfillmentOrder;
use Slince\Shopify\Service\Common\AbstractManager;

class FulfillmentOrderManager extends AbstractManager implements FulfillmentOrderManagerInterface
{
    /**
     * @inheritDoc
     */
    public function getModelClass()
    {
        return FulfillmentOrder::class;
    }

    /**
     * @inheritDoc
     */
    protected function getResourceName()
    {
        return 'fulfillment_order';
    }

    /**
     * @inheritDoc
     */
    public function findAll($orderId, array $query = [])
    {
        $data = $this->client->get("/orders/{$orderId}/fulfillment_orders", $query);

        return $this->createMany($data['fulfillment_orders']);
    }

    /**
     * @inheritDoc
     */
    public function find($id)
    {
        $data = $this->client->get("/fulfillment_orders/{$id}");

        return $this->fromArray($data['fulfillment_order']);
    }

    /**
     * @inheritDoc
     */
    public function close($id, array $data)
    {
        $data = $this->client->post("/fulfillment_orders/{$id}/close", [
            'fulfillment_order' => $data
        ]);

        return $this->fromArray($data['fulfillment_order']);
    }

    /**
     * @inheritDoc
     */
    public function cancel($id)
    {
        $data = $this->client->post("/fulfillment_orders/{$id}/cancel", []);

        return $this->fromArray($data['fulfillment_order']);
    }

    /**
     * @inheritDoc
     */
    public static function getServiceName()
    {
        return 'fulfillment_orders';
    }
}
