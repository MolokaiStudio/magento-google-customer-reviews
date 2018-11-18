<?php


namespace MolokaiStudio\GoogleCustomerReviews\Model;

use Magento\Sales\Api\Data\OrderInterface;

class EstimatedDelivery implements EstimatedDeliveryInterface
{
    /**
     * @var ConfigurationInterface
     */
    protected $configuration;

    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(ConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return string
     */
    public function getEstimatedDelivery(OrderInterface $order)
    {
        $orderDate = $order->getCreatedAt();

        $estimatedDeliveryDays = intval($this->configuration->getEstimatedDeliveryDays());

        $dateObject = new \DateTime($orderDate);
        $dateObject->modify("+{$estimatedDeliveryDays} days");

        return $dateObject->format("Y-m-d");
    }
}