<?php


namespace Training\TestModule\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Training\TestModule\Model\StudentFactory;

class InstallData implements InstallDataInterface
{

    protected  $_studentFactory;
    public function __construct(StudentFactory $studentFactory){
        $this->_studentFactory = $studentFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            'student_name' => 'Test Data',
            'grade'        => 'A',
            'class'        => '3'
        ];

        $stuM = $this->_studentFactory->create();
        $stuM->addData($data)->save();

    }
}
