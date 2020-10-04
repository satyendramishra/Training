<?php

namespace Training\TestModule\Model\ResourceModel\Student;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public $_idFieldName = 'entity_id';

    public function _construct()
    {
        $this->_init('\Training\TestModule\Model\Student', '\Training\TestModule\Model\ResourceModel\Student');
    }
}
