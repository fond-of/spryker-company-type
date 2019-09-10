<?php

namespace FondOfSpryker\Zed\CompanyType\Business;

use Generated\Shared\Transfer\CompanyResponseTransfer;
use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeFacadeInterface
{
    /**
     * Specification:
     * - Retrieve a company type by CompanyTypeTransfer::idCompanyType in the transfer
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer;

    /**
     * Specification:
     * - Retrieves collection of all company types
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    public function getCompanyTypes(): CompanyTypeCollectionTransfer;

    /**
     * Specification:
     * - Creates a company type
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function createCompanyType(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer;

    /**
     * Specification:
     * - Finds a company type by CompanyTypeTransfer::idCompanyType in the transfer
     * - Updates fields in a company type entity
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function updateCompanyType(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer;

    /**
     * Specification:
     * - Finds a company type by CompanyTypeTransfer::idCompanyType in the transfer
     * - Deletes the company type
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return void
     */
    public function deleteCompanyType(CompanyTypeTransfer $companyTypeTransfer): void;

    /**
     * Specification:
     * - Assigns default company type for a company after company create.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyResponseTransfer $companyResponseTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyResponseTransfer
     */
    public function assignDefaultCompanyTypeToNewCompany(CompanyResponseTransfer $companyResponseTransfer): CompanyResponseTransfer;
}
