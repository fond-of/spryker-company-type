<?php

namespace FondOfSpryker\Zed\CompanyType\Business\CompanyTypeExportValidator;

use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReader;
use FondOfSpryker\Zed\CompanyType\CompanyTypeConfig;
use Generated\Shared\Transfer\CompanyTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;
use Generated\Shared\Transfer\EventEntityTransfer;

class CompanyTypeExportValidator implements CompanyTypeExportValidatorInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig
     */
    protected $companyTypeConfig;

    /**
     * @var \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReader
     */
    protected $companyTypeReader;

    /**
     * CompanyTypeExportValidator constructor.
     *
     * @param \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReader $companyTypeReader
     * @param \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig $companyTypeConfig
     */
    public function __construct(
        CompanyTypeReader $companyTypeReader,
        CompanyTypeConfig $companyTypeConfig
    ) {
        $this->companyTypeConfig = $companyTypeConfig;
        $this->companyTypeReader = $companyTypeReader;
    }

    /**
     * @param \Generated\Shared\Transfer\EventEntityTransfer $eventEntityTransfer
     *
     * @return bool
     */
    public function validate(EventEntityTransfer $eventEntityTransfer): bool
    {
        $idCompany = null;
        if ($eventEntityTransfer->getName() === 'spy_company') {
            $idCompany = $eventEntityTransfer->getId();
        }else {
            $foreignKey = $eventEntityTransfer->getName().'.fk_company';
            if (array_key_exists($foreignKey, $eventEntityTransfer->getForeignKeys())) {
                $idCompany =  $eventEntityTransfer->getForeignKeys()[$foreignKey];
            }

        }

        if ($idCompany === null) {
            return false;
        }

        $companyTransfer = (new CompanyTransfer())->setIdCompany($idCompany);
        $companyTypeTransfer = $this->companyTypeReader->findCompanyTypeByIdCompany($companyTransfer);

        if ($companyTypeTransfer === null) {
            return false;
        }

        return in_array($companyTypeTransfer->getName(),
            $this->companyTypeConfig->getValidCompanyTypesForExport());
    }
}
