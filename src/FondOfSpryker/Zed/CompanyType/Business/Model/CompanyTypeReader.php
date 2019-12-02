<?php

namespace FondOfSpryker\Zed\CompanyType\Business\Model;

use FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface;
use Generated\Shared\Transfer\CompanyCollectionTransfer;
use Generated\Shared\Transfer\CompanyTransfer;
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
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getByName(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer
    {
        $companyTypeTransfer->requireName();

        return $this->companyTypeRepository->getByName($companyTypeTransfer->getName());
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyTypeCollectionTransfer $companyTypeCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer|null
     */
    public function findCompaniesByCompanyTypeIds(CompanyTypeCollectionTransfer $companyTypeCollectionTransfer): ?CompanyCollectionTransfer
    {
        $companyTypeIds = [];

        foreach ($companyTypeCollectionTransfer->getCompanyTypes() as $companyTypeTransfer) {
            $companyTypeIds[] = $companyTypeTransfer->getIdCompanyType();
        }

        return $this->companyTypeRepository->findCompaniesByCompanyTypeIds($companyTypeIds);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function findCompanyTypeByIdCompany(CompanyTransfer $companyTransfer): ?CompanyTypeTransfer
    {
        return $this->companyTypeRepository->findCompanyTypeByIdCompany($companyTransfer);
    }

    /**
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    public function getAll(): CompanyTypeCollectionTransfer
    {
        return $this->companyTypeRepository->getAll();
    }
}
