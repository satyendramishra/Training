<?php


namespace Training\TestModule\Model;


use Training\TestModule\Api\GradeInterface;
use Training\TestModule\Api\PowerInterface;

class GradeTwo implements GradeInterface
{
    protected $_power;
    public function __construct(PowerInterface $power){
        $this->_power = $power;
    }

    public function getGrade()
    {
        $grade = 'Grade Two';
        $powerData = $this->_power->getPower();
        return $grade . ' ' . $powerData;
    }
}
