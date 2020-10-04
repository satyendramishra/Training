<?php


namespace Training\TestModule\Controller\Adminhtml\Student;
use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\ForwardFactory;

class NewAction extends Action
{
    protected $_forwardFactory;
    public function __construct(Action\Context $context, ForwardFactory $forwardFactory)
    {
        $this->_forwardFactory = $forwardFactory;
        parent::__construct($context);
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Training_TestModule::student');
    }

    public function execute()
    {
        return $this->_forwardFactory->create()->forward('edit');
    }

}
