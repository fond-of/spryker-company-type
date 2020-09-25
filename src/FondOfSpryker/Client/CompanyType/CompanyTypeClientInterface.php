<?php

namespace FondOfSpryker\Client\CompanyType;

use Generated\Shared\Transfer\CompanyTypeResponseTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeClientInterface
{
    /**
     * @deprecated Use findCompanyTypeById instead
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer;


    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeResponseTransfer
     */
    public function findCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeResponseTransfer;
}
