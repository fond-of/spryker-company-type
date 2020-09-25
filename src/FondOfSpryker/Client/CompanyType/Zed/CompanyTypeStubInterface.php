<?php

namespace FondOfSpryker\Client\CompanyType\Zed;

use Generated\Shared\Transfer\CompanyTypeResponseTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeStubInterface
{
    /**
     * @deprecated Use findCompanyTypeById instead
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeById(
        CompanyTypeTransfer $companyTypeTransfer
    ): CompanyTypeTransfer;

    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeResponseTransfer
     */
    public function findCompanyTypeById(
        CompanyTypeTransfer $companyTypeTransfer
    ): CompanyTypeResponseTransfer;
}
