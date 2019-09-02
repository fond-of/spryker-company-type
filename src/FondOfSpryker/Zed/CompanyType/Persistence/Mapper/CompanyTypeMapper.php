<?php

namespace FondOfSpryker\Zed\CompanyType\Persistence\Mapper;

use Generated\Shared\Transfer\CompanyTypeTransfer;
use Orm\Zed\CompanyType\Persistence\FosCompanyType;

class CompanyTypeMapper implements CompanyTypeMapperInterface
{
    /**
     * @param \Orm\Zed\CompanyType\Persistence\FosCompanyType $fosCompanyType
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function mapEntityToTransfer(
        FosCompanyType $fosCompanyType,
        CompanyTypeTransfer $companyTypeTransfer
    ): CompanyTypeTransfer {
        return $companyTypeTransfer->fromArray(
            $fosCompanyType->toArray(),
            true
        );
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     * @param \Orm\Zed\CompanyType\Persistence\FosCompanyType $fosCompanyType
     *
     * @return \Orm\Zed\CompanyType\Persistence\FosCompanyType
     */
    public function mapTransferToEntity(
        CompanyTypeTransfer $companyTypeTransfer,
        FosCompanyType $fosCompanyType
    ): FosCompanyType {
        $fosCompanyType->fromArray(
            $companyTypeTransfer->modifiedToArray(false)
        );

        return $fosCompanyType;
    }
}
