<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\GradeInterface;
use Training\TestModule\Api\PowerInterface;

class GradeThree implements GradeInterface
{

    protected $_power;
    public function __construct(PowerInterface $power){
        $this->_power = $power;
    }

    public function getGrade()
    {
        $grade = 'Grade Three';
        $powerData = $this->_power->getPower();
        return $grade . ' ' . $powerData;
    }
}
