<?php

namespace FondOfSpryker\Zed\CompanyType\Persistence;

use FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyTypeMapper;
use FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyTypeMapperInterface;
use Orm\Zed\CompanyType\Persistence\FosCompanyTypeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface getRepository()
 */
class CompanyTypePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyType\Persistence\FosCompanyTypeQuery
     */
    public function createCompanyTypeQuery(): FosCompanyTypeQuery
    {
        return FosCompanyTypeQuery::create();
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyTypeMapperInterface
     */
    public function createCompanyTypeMapper(): CompanyTypeMapperInterface
    {
        return new CompanyTypeMapper();
    }
}
