<?php

namespace FondOfSpryker\Zed\CompanyType\Business\Model;

use Generated\Shared\Transfer\CompanyCollectionTransfer;
use Generated\Shared\Transfer\CompanyTransfer;
use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getById(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer;
    
    /**
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    public function getAll(): CompanyTypeCollectionTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getByName(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyTypeCollectionTransfer $companyTypeCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer|null
     */
    public function findCompaniesByCompanyTypeIds(CompanyTypeCollectionTransfer $companyTypeCollectionTransfer): ?CompanyCollectionTransfer;

    /**
     * @param \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function findCompanyTypeByIdCompany(CompanyTransfer $companyTransfer): ?CompanyTypeTransfer;
}