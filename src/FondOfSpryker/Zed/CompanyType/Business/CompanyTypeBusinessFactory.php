<?php

namespace FondOfSpryker\Zed\CompanyType\Business;

use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReader;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReaderInterface;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeWriter;
use FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeWriterInterface;
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
}
