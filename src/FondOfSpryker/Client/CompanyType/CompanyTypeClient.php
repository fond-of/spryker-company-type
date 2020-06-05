<?php

namespace FondOfSpryker\Client\CompanyType;

use Generated\Shared\Transfer\CompanyTypeTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\CompanyType\CompanyTypeFactory getFactory()
 */
class CompanyTypeClient extends AbstractClient implements CompanyTypeClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer
    {
        return $this->getFactory()->createZedCompanyTypeStub()->getCompanyTypeById($companyTypeTransfer);
    }
}
