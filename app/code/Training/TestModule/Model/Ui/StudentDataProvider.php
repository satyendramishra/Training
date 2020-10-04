<?php

namespace Training\TestModule\Model\Ui;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Training\TestModule\Model\ResourceModel\Student\CollectionFactory;
class StudentDataProvider extends AbstractDataProvider
{
    protected $_collection;
    protected $_loadedData;
    public function __construct(
        CollectionFactory $collection,
        $name,
        $primaryFieldName,
        $requestFieldName,
        array $meta = [],
        array $data = []
    ) {
        $this->_collection = $collection->create();

        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);

    }

    public function getData()
    {
        if (isset($this->_loadedData)) {
            return $this->_loadedData;
        }

        $items = $this->_collection->getItems();
        $this->_loadedData = array();

        foreach ($items as $item) {
            $this->_loadedData[$item->getId()]['student'] = $item->getData();
        }

        return $this->_loadedData;
    }
}
