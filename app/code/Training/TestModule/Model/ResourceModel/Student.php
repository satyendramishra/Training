<?php


namespace Training\TestModule\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Student extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('student','entity_id');
    }
}
