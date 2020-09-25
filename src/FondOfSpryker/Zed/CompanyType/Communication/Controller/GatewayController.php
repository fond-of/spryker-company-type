<?php

namespace FondOfSpryker\Zed\CompanyType\Communication\Controller;

use Generated\Shared\Transfer\CompanyTypeResponseTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Business\CompanyTypeFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @deprecated use instead findCompanyTypeByIdAction
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeResponseTransfer
     */
    public function getCompanyTypeByIdAction(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeResponseTransfer
    {
        return $this->getFacade()->findCompanyTypeById($companyTypeTransfer);
    }

    /**
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeResponseTransfer
     */
    public function findCompanyTypeByIdAction(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeResponseTransfer
    {
        return $this->getFacade()->findCompanyTypeById($companyTypeTransfer);
    }
}
