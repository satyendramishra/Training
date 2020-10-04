<?php

namespace Training\TestModule\Ui\Component\Listing\Column;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class StudentActions extends Column
{
    protected $_urlBuilder;
    public function __construct(
        UrlInterface $url,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->_urlBuilder = $url;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $item[$this->getData('name')]['edit'] = [
                    'href' => $this->_urlBuilder->getUrl('studentgrid/student/edit', ['id' =>$item['entity_id']]),
                    'label' => __('Edit'),
                    'hidden' => false
                ];

                $item[$this->getData('name')]['delete'] = [
                    'href' => $this->_urlBuilder->getUrl('studentgrid/student/delete', ['id' => $item['entity_id']]),
                    'label' => __('Delete'),
                    'hidden' => false
                ];
            }
            return parent::prepareDataSource($dataSource);
        }
    }
}
