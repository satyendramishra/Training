<?php


namespace Training\TestModule\Model;
use Training\TestModule\Model\SlowLoadingTestModule;

class FastLoadingTestModule
{
    protected $_slowLoadingTestModule;
    public function __construct(SlowLoadingTestModule $slowLoadingTestModule){
        echo 'Fast loading class instantiated </br>';
        $this->_slowLoadingTestModule = $slowLoadingTestModule;

    }

    public function getFastValue(){
        return ' Fast Class Fast Value ';
    }

    public function getSlowValue(){
        $val = $this->_slowLoadingTestModule->getSlowValue();
        return 'Fast Class ' . $val;
    }

}
