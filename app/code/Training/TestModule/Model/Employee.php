<?php


namespace Training\TestModule\Model;


class Employee
{
    protected $_name;
    protected $_age;
    protected $_skills;
    public function __construct($name = 'Satyendra', $age= 31, $skills = array('php' => 5, 'mysql' => 4))
    {
        $this->_name = $name;
        $this->_age = $age;
        $this->_skills = $skills;
    }

    public function getAllData(){
        return $this->_name . ' ' . $this->_age . ' ' . $this->_skills['php'] . ' ' . $this->_skills['mysql'];
    }

}