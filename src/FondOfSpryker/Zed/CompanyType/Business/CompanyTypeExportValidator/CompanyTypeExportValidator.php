<?php

namespace FondOfSpryker\Zed\CompanyType\Business\CompanyTypeExportValidator;

use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReaderInterface;
use FondOfSpryker\Zed\CompanyType\CompanyTypeConfig;
use Generated\Shared\Transfer\CompanyTransfer;
use Generated\Shared\Transfer\EventEntityTransfer;

class CompanyTypeExportValidator implements CompanyTypeExportValidatorInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig
     */
    protected $companyTypeConfig;

    /**
     * @var \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReaderInterface
     */
    protected $companyTypeReader;

    /**
     * @param \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReaderInterface $companyTypeReader
     * @param \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig $companyTypeConfig
     */
    public function __construct(
        CompanyTypeReaderInterface $companyTypeReader,
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
        }

        $foreignKey = sprintf('%s.fk_company', $eventEntityTransfer->getName());
        $foreignKeys = $eventEntityTransfer->getForeignKeys();

        if ($idCompany === null && array_key_exists($foreignKey, $foreignKeys)) {
            $idCompany = $foreignKeys[$foreignKey];
        }

        if ($idCompany === null) {
            return false;
        }

        $companyTransfer = (new CompanyTransfer())->setIdCompany($idCompany);

        $companyTypeTransfer = $this->companyTypeReader->findCompanyTypeByIdCompany($companyTransfer);

        if ($companyTypeTransfer === null) {
            return false;
        }

        return in_array(
            $companyTypeTransfer->getName(),
            $this->companyTypeConfig->getValidCompanyTypesForExport(),
            true
        );
    }
}
