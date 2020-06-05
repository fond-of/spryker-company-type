<?php

namespace FondOfSpryker\Client\CompanyType;

use Generated\Shared\Transfer\CompanyTypeTransfer;

interface CompanyTypeClientInterface
{
    /**
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer;
}
