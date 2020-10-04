<?php


namespace Training\TestModule\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;

interface StudentInterface extends ExtensibleDataInterface
{
    public const ENTITY_ID = 'entity_id';
    public const STUDENT_NAME = 'student_name';
    public const GRADE = 'grade';
    public const STUDENT_CLASS = 'class';
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    /**
     * @return int
     */
    public function getEntityId();

    /**
     * @return string
     */
    public function getStudentName();

    /**
     * @return string
     */
    public function getGrade();

    /**
     * @return int
     */
    public function getClass();

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @param int $id
     * @return \Training\TestModule\Api\Data\StudentInterface
     */
    public function setEntityId($id);

    /**
     * @param sting $name
     * @return \Training\TestModule\Api\Data\StudentInterface
     */
    public function setStudentName($name);

    /**
     * @param string $grade
     * @return \Training\TestModule\Api\Data\StudentInterface
     */
    public function setGrade($grade);

    /**
     * @param int $class
     * @return Training\TestModule\Api\Data\StudentInterface
     */
    public function setClass($class);

    /**
     * @return \Training\TestModule\Api\Data\StudentExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \Training\TestModule\Api\Data\StudentExtensionInterface $studentExtension
     * @return $this
     */
    public function setExtensionAttributes(\Training\TestModule\Api\Data\StudentExtensionInterface $studentExtension);
}
