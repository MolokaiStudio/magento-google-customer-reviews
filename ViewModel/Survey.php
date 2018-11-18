<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 03.09.18
 * Time: 21:09
 */

namespace MolokaiStudio\GoogleCustomerReviews\ViewModel;


use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Checkout\Model\Session;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use MolokaiStudio\GoogleCustomerReviews\Model\ConfigurationInterface;
use MolokaiStudio\GoogleCustomerReviews\Model\EstimatedDeliveryInterface;

class Survey implements ArgumentInterface
{
    /**
     * @var Session
     */
    private $session;
    /**
     * @var ConfigurationInterface
     */
    private $configuration;
    /**
     * @var EstimatedDeliveryInterface
     */
    private $estimatedDelivery;

    public function __construct(
        Session $session,
        ConfigurationInterface $configuration,
        EstimatedDeliveryInterface $estimatedDelivery
    )
    {
        $this->session = $session;
        $this->configuration = $configuration;
        $this->estimatedDelivery = $estimatedDelivery;
    }

    public function isEnabled()
    {
        return $this->configuration->isEnabled();
    }

    public function showProductsInSurvey()
    {
        return $this->configuration->getShowProductsInSurvey();
    }

    public function getMerchantId()
    {
        return $this->configuration->getMerchantId();
    }

    public function getPosition()
    {
        return $this->configuration->getSurveyPosition();
    }

    public function getOrderId()
    {
        return $this->session->getLastRealOrder()->getIncrementId();
    }

    public function getCustomerEmail()
    {
        return $this->session->getLastRealOrder()->getCustomerEmail();
    }

    public function getDeliveryCountry()
    {
        return $this->session->getLastRealOrder()->getShippingAddress()->getCountryId();
    }

    public function getEstimatedDeliveryDate()
    {
        return $this->estimatedDelivery->getEstimatedDelivery($this->session->getLastRealOrder());
    }

    public function getProductsGtins()
    {
        $order = $this->session->getLastRealOrder();

        $array = [];

        /** @var ProductInterface[] $items */
        $items = $order->getAllVisibleItems();
        foreach ($items as $item) {
            $array[] = ['gtin' => $item->getSku()];
        }

        return $array;
    }
}