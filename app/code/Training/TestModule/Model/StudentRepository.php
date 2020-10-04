<?php

namespace Training\TestModule\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Training\TestModule\Api\Data\StudentInterface;
use Training\TestModule\Api\StudentRepositoryInterface;
use Training\TestModule\Model\ResourceModel\Student\CollectionFactory;
use Training\TestModule\Model\StudentFactory;
use Training\TestModule\Api\Data\StudentSearchResultsInterfaceFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessor;

class StudentRepository implements StudentRepositoryInterface
{
    protected $_collectionFactory;
    protected $_studentFactory;
    protected $_searchResultsFactory;
    protected $_collectionProcessor;
    public function __construct(CollectionFactory $collectionFactory, StudentFactory $studentFactory,
                                StudentSearchResultsInterfaceFactory $searchResultsInterfaceFactory,
                                CollectionProcessor $collectionProcessor)
    {
        $this->_collectionFactory = $collectionFactory;
        $this->_studentFactory = $studentFactory;
        $this->_searchResultsFactory = $searchResultsInterfaceFactory;
        $this->_collectionProcessor = $collectionProcessor;
    }

    /**
     * @return StudentInterface[]
     */
    public function getList()
    {
        return $this->_collectionFactory->create()->getItems();
    }

    /**
     * @param int $id
     * @return StudentInterface
     * @throws NoSuchEntityException
     */
    public function getById($id)
    {
        $studentModel = $this->_studentFactory->create();
        $studentModel->getResource()->load($studentModel, $id);
        if (!$studentModel->getEntityId()) {
            throw NoSuchEntityException::singleField('entity_id',$id);
        }
        return $studentModel;
    }

    /**
     * @param StudentInterface $student
     * @return StudentInterface
     */
    public function save(StudentInterface $student)
    {
        $student->getResource()->save($student);
        return $student;
    }


    /**
     * @param int $id
     * @return string
     */
    public function deleteById($id)
    {
        $studentModel = $this->_studentFactory->create();
        $studentModel->getResource()->load($studentModel,$id)->delete($studentModel);
        return 'Deleted Successfully';
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Training\TestModule\Api\Data\StudentSearchResultsInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->_collectionFactory->create();
        $this->_collectionProcessor->process($searchCriteria,$collection);
        $searchResults = $this->_searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getData());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;


    }
}
