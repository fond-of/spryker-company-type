<?php

namespace FondOfSpryker\Zed\CompanyType\Business\Model;

use FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface;
use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

class CompanyTypeReader implements CompanyTypeReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface
     */
    protected $companyTypeRepository;

    /**
     * @param \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface $companyTypeRepository
     */
    public function __construct(CompanyTypeRepositoryInterface $companyTypeRepository)
    {
        $this->companyTypeRepository = $companyTypeRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getById(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer
    {
        $companyTypeTransfer->requireIdCompanyType();

        return $this->companyTypeRepository->getById($companyTypeTransfer->getIdCompanyType());
    }

    /**
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    public function getAll(): CompanyTypeCollectionTransfer
    {
        return $this->companyTypeRepository->getAll();
    }
}
