<?php


namespace MolokaiStudio\GoogleCustomerReviews\Model\Config\Source;


use Magento\Framework\Data\OptionSourceInterface;

class SurveyPosition implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => 'CENTER_DIALOG', 'value' => 'CENTER_DIALOG'],
            ['label' => 'BOTTOM_RIGHT_DIALOG', 'value' => 'BOTTOM_RIGHT_DIALOG'],
            ['label' => 'BOTTOM_LEFT_DIALOG', 'value' => 'BOTTOM_LEFT_DIALOG'],
            ['label' => 'TOP_RIGHT_DIALOG', 'value' => 'TOP_RIGHT_DIALOG'],
            ['label' => 'TOP_LEFT_DIALOG', 'value' => 'TOP_LEFT_DIALOG'],
            ['label' => 'BOTTOM_TRAY', 'value' => 'BOTTOM_TRAY']
        ];
    }
}