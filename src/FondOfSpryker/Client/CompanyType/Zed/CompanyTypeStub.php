<?php

namespace FondOfSpryker\Client\CompanyType\Zed;

use FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface;
use Generated\Shared\Transfer\CompanyTypeTransfer;

class CompanyTypeStub implements CompanyTypeStubInterface
{
    /**
     * @var \FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param \FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface $zedRequestClient
     */
    public function __construct(CompanyTypeToZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer
    {
        /** @var \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer */
        $companyTypeTransfer = $this->zedRequestClient->call(
            '/company-type/gateway/get-company-type-by-id',
            $companyTypeTransfer
        );

        return $companyTypeTransfer;
    }
}
