<?php

namespace FondOfSpryker\Zed\CompanyType\Communication\Plugin\JellyfishB2BExtension;

use FondOfSpryker\Zed\JellyfishB2BExtension\Dependency\Plugin\EventEntityTransferExportValidatorPluginInterface;
use Generated\Shared\Transfer\EventEntityTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Business\CompanyTypeFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig getConfig()
 */
class CompanyTypeEventEntityTransferExportValidatorPluginInterface extends AbstractPlugin implements EventEntityTransferExportValidatorPluginInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\EventEntityTransfer $transfer
     * @return bool
     */
    public function validate(EventEntityTransfer $transfer): bool
    {
        return $this->getFacade()->validateCompanyTypeForExport($transfer);
    }
}
