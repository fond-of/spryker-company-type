<?php

namespace FondOfSpryker\Zed\CompanyType\Communication\Plugin\CompanyExtension;

use Generated\Shared\Transfer\CompanyResponseTransfer;
use Spryker\Zed\CompanyExtension\Dependency\Plugin\CompanyPreSavePluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Business\CompanyTypeFacadeInterface getFacade()
 */
class CompanyTypePreSavePlugin extends AbstractPlugin implements CompanyPreSavePluginInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyResponseTransfer $companyResponseTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyResponseTransfer
     */
    public function preSaveValidation(CompanyResponseTransfer $companyResponseTransfer): CompanyResponseTransfer
    {
        return $this->getFacade()->assignDefaultCompanyTypeToNewCompany($companyResponseTransfer);
    }
}
