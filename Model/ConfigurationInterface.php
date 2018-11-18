<?php


namespace MolokaiStudio\GoogleCustomerReviews\Model;


interface ConfigurationInterface
{
    public function isEnabled();
    public function getMerchantId();
    public function isBadgeEnabled();
    public function getEstimatedDeliveryDays();
    public function getShowProductsInSurvey();
    public function getBadgePosition();
    public function getSurveyPosition();
}