<?php

namespace FondOfSpryker\Zed\CompanyType\Dependency\Facade;

use FondOfSpryker\Zed\Company\Business\CompanyFacadeInterface;
use Generated\Shared\Transfer\CompanyResponseTransfer;
use Generated\Shared\Transfer\CompanyTransfer;

class CompanyTypeToCompanyFacadeBridge implements CompanyTypeToCompanyFacadeInterface
{
    /**
     * @var \FondOfSpryker\Zed\Company\Business\CompanyFacadeInterface
     */
    protected $companyFacade;

    /**
     * CompanyTypeToCompanyFacadeBridge constructor.
     *
     * @param \FondOfSpryker\Zed\Company\Business\CompanyFacadeInterface $companyFacade
     */
    public function __construct(CompanyFacadeInterface $companyFacade)
    {
        $this->companyFacade = $companyFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyResponseTransfer
     */
    public function update(CompanyTransfer $companyTransfer): CompanyResponseTransfer
    {
        return $this->companyFacade->update($companyTransfer);
    }
}