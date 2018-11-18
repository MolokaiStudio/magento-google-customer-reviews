<?php

namespace MolokaiStudio\GoogleCustomerReviews\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use MolokaiStudio\GoogleCustomerReviews\Model\ConfigurationInterface;

class Badge implements ArgumentInterface
{
    /**
     * @var ConfigurationInterface
     */
    protected $configuration;

    public function __construct(ConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    public function isBadgeEnabled()
    {
        return $this->configuration->isEnabled() && $this->configuration->isBadgeEnabled();
    }

    public function getMerchantId()
    {
        return $this->configuration->getMerchantId();
    }

    public function getBadgePosition()
    {
        return $this->configuration->getBadgePosition();
    }
}