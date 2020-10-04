<?php


namespace Training\TestModule\Model\Adminhtml\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Studentsource implements OptionSourceInterface
{
    public function toOptionArray()
    {
        $options = [
            [
                'value' => '1',
                'label' => 'Option 1'
            ],
            [
                'value' => '2',
                'label' => 'Option 2',
            ],
            [
                'value' => '3',
                'label' => 'Option 3',
            ],
        ];
        return $options;
    }
}
