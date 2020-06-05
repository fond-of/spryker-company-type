<?php

namespace FondOfSpryker\Client\CompanyType\Zed;

use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeById(
        CompanyTypeTransfer $companyTypeTransfer
    ): CompanyTypeTransfer;
}
