<?php


namespace MolokaiStudio\GoogleCustomerReviews\Model\Config\Source;


use Magento\Framework\Data\OptionSourceInterface;

class BadgePosition implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['label' => 'INLINE', 'value' => 'INLINE'],
            ['label' => 'BOTTOM_RIGHT', 'value' => 'BOTTOM_RIGHT'],
            ['label' => 'BOTTOM_LEFT', 'value' => 'BOTTOM_LEFT']
        ];
    }

}