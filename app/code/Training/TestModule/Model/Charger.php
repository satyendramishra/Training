<?php


namespace Training\TestModule\Model;
use Training\TestModule\Api\ChargerInterface;
use Training\TestModule\Api\ColorInterface;
use Training\TestModule\Api\GradeInterface;


class Charger implements ChargerInterface
{
    protected $_color;
    protected $_grade;
    public function __construct(ColorInterface $color, GradeInterface $grade)
    {
        $this->_color = $color;
        $this->_grade = $grade;

    }

    public function getCharger()
    {
        //return 'Charger Made';
        $colorData = $this->_color->getColor();
        $gradeData = $this->_grade->getGrade();
        return 'Color ' . $colorData . ' ' . $gradeData;
    }
}
