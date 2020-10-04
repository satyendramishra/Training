<?php


namespace Training\TestModule\Model;


class SlowLoadingTestModule
{
    public function __construct(){
        echo ' Slow Loading class intantiated </br>';
    }

    public function getSlowValue(){
        return 'Slow Value ';
    }
}
