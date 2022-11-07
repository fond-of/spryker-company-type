<?php

namespace FondOfSpryker\Zed\CompanyType\Business\Model;

use FondOfSpryker\Zed\CompanyType\CompanyTypeConfig;
use FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface;
use Generated\Shared\Transfer\CompanyResponseTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

class CompanyTypeAssigner implements CompanyTypeAssignerInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig
     */
    protected $companyTypeConfig;

    /**
     * @var \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface
     */
    protected $companyTypeRepository;

    /**
     * @param \FondOfSpryker\Zed\CompanyType\CompanyTypeConfig $companyTypeConfig
     * @param \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface $companyTypeRepository
     */
    public function __construct(
        CompanyTypeConfig $companyTypeConfig,
        CompanyTypeRepositoryInterface $companyTypeRepository
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
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    private function getDefaultCompanyType(): ?CompanyTypeTransfer
    {
        return $this->companyTypeRepository->getByName(
            $this->companyTypeConfig->getDefaultCompanyTypeName(),
        );
    }
}
