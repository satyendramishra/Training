<?php

namespace Training\TestModule\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Training\TestModule\Api\Data\StudentInterface;

interface StudentRepositoryInterface
{
    /**
     * @param int $id
     * @return StudentInterface
     */
    public function getById($id);

    /**
     * @param StudentInterface $student
     * @return StudentInterface
     */
    public function save(StudentInterface $student);

    /**
     * @param int $id
     * @return string
     */
    public function deleteById($id);

    /**
     * @return StudentInterface[]
     */
    public function getList();

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Training\TestModule\Api\Data\StudentSearchResultsInterface
     */
    public function getSearchResultsList(SearchCriteriaInterface $searchCriteria);
}
