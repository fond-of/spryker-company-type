<?php

namespace FondOfSpryker\Client\CompanyType;

use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer;
}
