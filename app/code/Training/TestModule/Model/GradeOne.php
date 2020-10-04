<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\GradeInterface;
use Training\TestModule\Api\PowerInterface;

class GradeOne implements GradeInterface
{
    protected $_power;
    public function __construct(PowerInterface $power){
        $this->_power = $power;
    }

    public function getGrade()
    {
        $grade = 'Grade One';
        $powerData = $this->_power->getPower();
       return $grade . ' ' . $powerData;
    }
}
