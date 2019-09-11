<?php

namespace FondOfSpryker\Zed\CompanyType\Business;

use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeAssigner;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeAssignerInterface;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReader;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReaderInterface;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeWriter;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeWriterInterface;
use FondOfSpryker\Zed\CompanyType\CompanyTypeDependencyProvider;
use FondOfSpryker\Zed\CompanyType\Dependency\Facade\CompanyTypeToCompanyFacadeInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeEntityManagerInterface getEntityManager()
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface getRepository()
 */
class CompanyTypeBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReaderInterface
     */
    public function createCompanyTypeReader(): CompanyTypeReaderInterface
    {
        return new CompanyTypeReader(
            $this->getRepository()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeWriterInterface
     */
    public function createCompanyTypeWriter(): CompanyTypeWriterInterface
    {
        return new CompanyTypeWriter(
            $this->getEntityManager()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeAssignerInterface
     *
     * @throws
     */
    public function createCompanyTypeAssigner(): CompanyTypeAssignerInterface
    {
        return new CompanyTypeAssigner(
            $this->getConfig(),
            $this->getRepository()
        );
    }
}
