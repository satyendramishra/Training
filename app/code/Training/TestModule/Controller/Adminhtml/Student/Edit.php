<?php

namespace Training\TestModule\Controller\Adminhtml\Student;

use Magento\Backend\App\Action;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Training\TestModule\Model\StudentFactory;

class Edit extends Action
{
    protected $_studentFactory;
    protected $_pageFactory;
    protected $_registry;
    public function __construct(Action\Context $context, StudentFactory $studentFactory, PageFactory $pageFactory, Registry $registry)
    {
        $this->_registry = $registry;
        $this->_pageFactory = $pageFactory;
        $this->_studentFactory = $studentFactory;
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Training_TestModule::student');
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_studentFactory->create();
        $model->getResource()->load($model, $id);
        if (!$model->getEntityId()) {
            $this->messageManager->addErrorMessage(__('This student does not exist'));
            return $this->resultRedirectFactory->create()->setPath('studentgrid/student/index');
        }

        $data = $this->_getSession()->getFormData(true);
        if (!empty($data)) {
            $model->setData($data);
        }

        $resultPage = $this->_pageFactory->create();
        $this->_registry->register('student', $model);
        $id ? $breadCrum = __('Edit') : $breadCrum = __('Add');
        $resultPage->addBreadcrumb($breadCrum, $breadCrum);
        if ($id) {
            $resultPage->getConfig()->getTitle()->prepend('Edit');
        } else {
            $resultPage->getConfig()->getTitle()->prepend('Add');
        }

        return $resultPage;
    }
}
