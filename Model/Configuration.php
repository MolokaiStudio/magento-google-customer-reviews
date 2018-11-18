<?php

namespace MolokaiStudio\GoogleCustomerReviews\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Configuration implements ConfigurationInterface
{
    const XML_ENABLED = "molokaistudio_customerreviews/general/enabled";

    const XML_BADGE_ENABLED = "molokaistudio_customerreviews/badge/enabled";

    const XML_MERCHANT_ID = "molokaistudio_customerreviews/general/merchant_id";

    const XML_ESTIMATED_DELIVERY = "molokaistudio_customerreviews/survey/estimated_delivery_time";

    const XML_SHOW_PRODUCTS_IN_SURVEY = "molokaistudio_customerreviews/survey/show_products_in_survey";

    const XML_BADGE_POSITION = "molokaistudio_customerreviews/badge/position";

    const XML_SURVEY_POSITION = "molokaistudio_customerreviews/survey/position";
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_ENABLED);
    }

    public function isBadgeEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_BADGE_ENABLED);
    }

    public function getMerchantId()
    {
        return $this->scopeConfig->getValue(self::XML_MERCHANT_ID);
    }

    public function getEstimatedDeliveryDays()
    {
        return $this->scopeConfig->getValue(self::XML_ESTIMATED_DELIVERY);
    }

    public function getShowProductsInSurvey()
    {
        return $this->scopeConfig->isSetFlag(self::XML_SHOW_PRODUCTS_IN_SURVEY);
    }

    public function getBadgePosition()
    {
        return $this->scopeConfig->getValue(self::XML_BADGE_POSITION);
    }

    public function getSurveyPosition()
    {
        return $this->scopeConfig->getValue(self::XML_SURVEY_POSITION);
    }

}