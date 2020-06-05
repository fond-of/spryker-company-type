<?php

namespace FondOfSpryker\Zed\CompanyType\Communication\Controller;

use Generated\Shared\Transfer\CompanyTypeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Business\CompanyTypeFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeByIdAction(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer
    {
        return $this->getFacade()->getCompanyTypeById($companyTypeTransfer);
    }
}
