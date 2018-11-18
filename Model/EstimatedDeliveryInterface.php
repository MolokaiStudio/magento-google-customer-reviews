<?php


namespace MolokaiStudio\GoogleCustomerReviews\Model;


use Magento\Sales\Api\Data\OrderInterface;

interface EstimatedDeliveryInterface
{
    public function getEstimatedDelivery(OrderInterface $order);
}