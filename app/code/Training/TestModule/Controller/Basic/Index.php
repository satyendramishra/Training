<?php

namespace Training\TestModule\Controller\Basic;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Training\TestModule\Api\ChargerInterface;
use Training\TestModule\Api\ColorInterface;
use Training\TestModule\Api\GradeInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Training\TestModule\Model\FastLoadingTestModule;

class Index extends Action {

    protected $_charger;
    protected $_color;
    protected $_grade;
    protected $_productFactory;
    protected $_mangerInterface;
    protected $_fastLoadingTestModule;
    public function __construct(FastLoadingTestModule $fastLoadingTestModule, ManagerInterface $manager, ProductFactory $productFactory, Context $context, ChargerInterface $charger, ColorInterface $color, GradeInterface $grade)
    {
        $this->_charger = $charger;
        $this->_color = $color;
        $this->_grade = $grade;
        $this->_productFactory = $productFactory;
        $this->_mangerInterface = $manager;
        $this->_fastLoadingTestModule = $fastLoadingTestModule;
        parent::__construct($context);
    }

    public function execute(){
        //echo $this->_charger->getCharger();
        //echo $this->_color->getColor();
        //echo $this->_grade->getGrade();
        //$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        //$employee = $objectManager->create('Training\TestModule\Model\Employee');
        //echo $employee->getAllData();

        // For Plugins.
        /*$product = $this->_productFactory->create()->load(1);
        $product->setName('Iphone');
        $name = $product->getName();
        echo 'name ' . $name . '</br>';
        $id = $product->getIdBySku('small_shirt');
        echo 'id ' . $id . '</br>';*/

        // For custom event
        /*$text = new \Magento\Framework\DataObject(array('sometext' => 'Good Morning'));
        echo $text->getSometext();
        $this->_mangerInterface->dispatch('custom_event',['sometext' => $text]);*/

        //For Proxy Class implementation.
        echo $this->_fastLoadingTestModule->getSlowValue();
    }
}
