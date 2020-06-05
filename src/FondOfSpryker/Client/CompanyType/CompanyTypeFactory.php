<?php

namespace FondOfSpryker\Client\CompanyType;

use FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface;
use FondOfSpryker\Client\CompanyType\Zed\CompanyTypeStub;
use FondOfSpryker\Client\CompanyType\Zed\CompanyTypeStubInterface;
use Spryker\Client\Kernel\AbstractFactory;

class CompanyTypeFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\CompanyType\Zed\CompanyTypeStubInterface
     */
    public function createZedCompanyTypeStub(): CompanyTypeStubInterface
    {
        return new CompanyTypeStub($this->getZedRequestClient());
    }

    /**
     * @return \FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface
     */
    protected function getZedRequestClient(): CompanyTypeToZedRequestClientInterface
    {
        return $this->getProvidedDependency(CompanyTypeDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
