<?php


namespace Training\TestModule\Controller\Basic;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Training\TestModule\Model\StudentFactory;
use Training\TestModule\Model\ResourceModel\Student;

class crude extends Action
{
    protected $_studentFactory;
    protected $_studentResource;
    public function __construct(Context $context, StudentFactory $studentFactory, Student $student)
    {
        $this->_studentResource = $student;
        $this->_studentFactory = $studentFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        /* //Depreicate save
        $studData = $this->_studentFactory->create();
        $studData->setStudentName('New Student');
        $studData->setGrade('B');
        $studData->setClass('4');
        $studData->save();
        echo 'success';*/

        /*// New Save
        $taskData = [
            'student_name' => 'Test C',
            'grade' => 'D',
            'class' => '4th'
        ];

        $studentModel = $this->_studentFactory->create()->addData($taskData);
        $this->_studentResource->save($studentModel);
        echo 'success';*/

        /*// Read data from database
        $id = 1;
        $studentModel = $this->_studentFactory->create();
        $this->_studentResource->load($studentModel,$id);
        print_r($studentModel->getData());*/

        /* // Edit Data
        $id = 1;
        $studentModel = $this->_studentFactory->create();
        $this->_studentResource->load($studentModel,$id);
        $studentModel->setStudentName('Testing');
        $this->_studentResource->save($studentModel);
        echo 'success';*/

        /* //Delete Data
        $id = 1;
        $studentModel = $this->_studentFactory->create();
        $this->_studentResource->load($studentModel,$id);
        $this->_studentResource->delete($studentModel);
        echo 'success';*/


    }
}
