<?php

namespace FondOfSpryker\Zed\CompanyType\Persistence;

use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeRepositoryInterface
{
    /**
     * Specification:
     * - Returns a CompanyTypeTransfer by company type id.
     * - Returns null in case a record is not found.
     *
     * @api
     *
     * @param int $idCompanyType
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getById(int $idCompanyType): ?CompanyTypeTransfer;

    /**
     * Specification:
     * - Returns a CompanyTypeTransfer by company type name.
     * - Returns null in case a record is not found.
     *
     * @api
     *
     * @param string name
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getByName(string $name): ?CompanyTypeTransfer;

    /**
     * Specification:
     * - Returns a CompanyTypeCollectionTransfer.
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    public function getAll(): CompanyTypeCollectionTransfer;
}
