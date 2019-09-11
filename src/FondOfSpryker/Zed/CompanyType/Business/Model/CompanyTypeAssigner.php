<?php

namespace FondOfSpryker\Zed\CompanyType\Business\Model;

use FondOfSpryker\Zed\CompanyType\CompanyTypeConfig;
use FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepository;
use Generated\Shared\Transfer\CompanyResponseTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

class CompanyTypeAssigner implements CompanyTypeAssignerInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig
     */
    protected $companyTypeConfig;

    /**
     * @var \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepository
     */
    protected $companyTypeRepository;

    /**
     * @var \FondOfSpryker\Zed\CompanyType\Dependency\Facade\CompanyTypeToCompanyFacadeInterface
     */
    protected $companyFacade;

    /**
     * CompanyTypeAssigner constructor.
     *
     * @param \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig $companyTypeConfig
     * @param \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepository $companyTypeRepository
     */
    public function __construct(
        CompanyTypeConfig $companyTypeConfig,
        CompanyTypeRepository $companyTypeRepository
    ) {
        $this->companyTypeConfig = $companyTypeConfig;
        $this->companyTypeRepository = $companyTypeRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyResponseTransfer $companyResponseTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyResponseTransfer
     */
    public function assignDefaultCompanyTypeToNewCompany(
        CompanyResponseTransfer $companyResponseTransfer
    ): CompanyResponseTransfer {

        $companyTransfer = $companyResponseTransfer->getCompanyTransfer();

        if ($companyTransfer === null) {
            return $companyResponseTransfer;
        }

        $idCompanyType = $companyTransfer->getFkCompanyType();

        if ($idCompanyType !== null) {
            return $companyResponseTransfer;
        }

        $companyTypeTransfer = $this->getDefaultCompanyType();

        if ($companyTypeTransfer === null || $companyTypeTransfer->getIdCompanyType() === null) {
            return $companyResponseTransfer;
        }

        $companyTransfer->setFkCompanyType($companyTypeTransfer->getIdCompanyType());

        return $companyResponseTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    private function getDefaultCompanyType(): ?CompanyTypeTransfer
    {
        return $this->companyTypeRepository->getByName(
            $this->companyTypeConfig->getDefaultCompanyTypeName()
        );
    }

}
