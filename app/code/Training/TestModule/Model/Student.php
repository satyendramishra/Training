<?php

namespace Training\TestModule\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Framework\Model\AbstractModel;
use Training\TestModule\Api\Data\sting;
use Training\TestModule\Api\Data\StudentInterface;
use Training\TestModule\Api\Data\Training;

class Student extends AbstractExtensibleModel implements StudentInterface
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('\Training\TestModule\Model\ResourceModel\Student');
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(StudentInterface::ENTITY_ID);
    }

    /**
     * @return string
     */
    public function getStudentName()
    {
       return $this->getData(StudentInterface::STUDENT_NAME);
    }

    /**
     * @return string
     */
    public function getGrade()
    {
        return $this->getData(StudentInterface::GRADE);
    }

    /**
     * @return int
     */
    public function getClass()
    {
        return $this->getData(StudentInterface::STUDENT_CLASS);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(StudentInterface::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(StudentInterface::UPDATED_AT);
    }

    /**
     * @param sting $name
     * @return \Training\TestModule\Api\Data\StudentInterface
     */
    public function setStudentName($name)
    {
        $this->setData(StudentInterface::STUDENT_NAME,$name);
    }

    /**
     * @param string $grade
     * @return \Training\TestModule\Api\Data\StudentInterface
     */
    public function setGrade($grade)
    {
        $this->setData(StudentInterface::GRADE,$grade);
    }

    /**
     * @param int $class
     * @return \Training\TestModule\Api\Data\StudentInterface
     */
    public function setClass($class)
    {
        $this->setData(StudentInterface::STUDENT_CLASS,$class);
    }

    /**
     * @return \Training\TestModule\Api\Data\StudentExtensionInterface|null
     */

    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @param \Training\TestModule\Api\Data\StudentExtensionInterface $studentExtension
     * @return $this
     */

    public function setExtensionAttributes(\Training\TestModule\Api\Data\StudentExtensionInterface $studentExtension)
    {
        return $this->_setExtensionAttributes($studentExtension);
    }
}

