<?php

namespace Slince\Shopify\Manager\DraftOrder;

use Slince\Shopify\Common\Manager\GeneralCurdable;

class DraftOrderManager extends GeneralCurdable implements DraftOrderManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'draft_orders';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return DraftOrder::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'draft_order';
    }

    /**
     * {@inheritdoc}
     */
    public function sendInvoice($id, array $data)
    {
        $resource = "draft_orders/{$id}/send_invoice";
        $data = $this->client->post($resource, ['draft_order_invoice' => $data]);
        return reset($data);
    }

    /**
     * {@inheritdoc}
     */
    public function complete($id, $paymentPending = null)
    {
        $resource = "draft_orders/{$id}/complete";
        $query = $paymentPending === true ? ['payment_pending' => 'true'] : [];
        $data = $this->client->put($resource, [], $query);
        return $this->create($data['draft_order']);
    }
}